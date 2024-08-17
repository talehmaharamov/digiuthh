<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseComment;
use App\Models\CourseEpisode;
use App\Models\CourseReview;
use App\Models\CourseSection;
use App\Models\Event;
use App\Models\User as UserModel;
use App\Models\UserExam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function all_courses(Request $request)
    {
        $courses = Course::with(['user', 'course_category', 'course_reviews', 'course_comments', 'course_sections.course_episodes'])
            ->withCount('course_reviews')
            ->where('title', 'like', '%' . $request->input('search') . '%')
            ->orderBy('id', 'desc')
            ->paginate(12);

//        $ccc = Course::orderBy('id', 'desc')->with(['user', 'course_category', 'course_reviews', 'course_comments', 'course_sections.course_episodes'])->withCount('course_reviews')->get();
//        $lastSixCourses = $ccc->slice(-6);
        return view('courses.all', get_defined_vars());
    }

    public function myCourses(Request $request)
    {
        $courses = Course::with(['user', 'course_category', 'course_reviews', 'course_comments', 'course_sections.course_episodes'])
            ->withCount('course_reviews')
            ->where('title', 'like', '%' . $request->input('search') . '%')
            ->orderBy('id', 'desc')
            ->whereHas('course_users', function ($query) {
                return $query->where('user_id', auth()->user()->id);
            })
            ->paginate(12);

        $my = true;

        return view('courses.all', compact('courses', 'my'));
    }

    public function single_course($id, $slug, Request $request)
    {
        $comments = CourseComment::with('user')->where('course_id', $id)->orderByDesc('id')->paginate(5);

        $course = Course::with(['user', 'course_category', 'course_reviews', 'course_comments', 'course_sections.course_episodes'])->findOrFail($id);

        if (slug($course->title) !== $slug) {
            return redirect()->to('courses/' . $id . '-' . slug($course->title));
        }

        if (!$request->has('episode') || !$request->has('section')) {
            return redirect()->to('courses/' . $id . '-' . slug($course->title) . '?section=' . collect($course->course_sections)->firstOrFail()->id . '&episode=' . collect(collect($course->course_sections)->firstOrFail()->course_episodes)->firstOrFail()->id);
        }


        $section = CourseSection::findOrFail($request->input('section'));
        if ($section == null) {
            abort(404);
        }


        if (auth()->id()) {
            $count = \App\Models\CourseUser::where('user_id', auth()->user()->id)->where('course_id', $id)->count();

            if ($count === 0) {
                \App\Models\CourseUser::create([
                    'user_id' => auth()->user()->id,
                    'course_id' => $id
                ]);
            }
        }

        // if ($episode == null) {
        //     abort(404);
        // }

        // if ($episode->course_section_id !== $section->id) {
        //     abort(404);
        // }
        $episode = CourseEpisode::with('course_files')->findOrFail($request->input('episode'));
        $exam = false;
        if (auth()->id()) {
            $exam = UserExam::whereUserId(auth()->id())
                    ->whereCourseId($id)->count() === 0;

            return view('courses.single', compact('course', 'episode', 'section', 'comments', 'exam'));
        }

        $first_section = CourseSection::where('course_id', $id)->with('course_episodes')->firstOrFail();


        if ($first_section->id !== intval($request->input('section'))) {
            return redirect()->route('login');
        }

        if ($episode->id !== collect($first_section->course_episodes)->first()->id) {
            return redirect()->route('login');
        }

        return view('courses.single', compact('course', 'episode', 'section', 'comments', 'exam'));
    }

    public function post_comment(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        CourseComment::create([
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'comment' => $request->comment
        ]);

        return back();
    }

    public function rate($course_id, $ratingNum, $user_id)
    {
        CourseReview::create([
            'course_id' => $course_id,
            'review' => $ratingNum,
            'user_id' => $user_id
        ]);

        return response()->json([
            'success' => __('third.rate_successfully')
        ]);

    }

    public function category($id, $slug)
    {

//        $category = \App\Models\CourseCategory::findOrFail($id);

        $courses = Course::with(['user', 'course_category', 'course_reviews', 'course_comments', 'course_sections.course_episodes'])
            ->withCount('course_reviews')
            ->where('id', $id)
            ->orderBy('id', 'desc')
            ->paginate(12);

        return view('courses.all', compact('courses'));
    }

    public function course_exam($id, $slug)
    {
        $course = Course::findOrFail($id);

        if (count($course->course_exams) == 0) {
            abort(404);
        }

        $user = Auth()->user();

        $user_exam = \App\Models\UserExam::where('user_id', $user->id)->where('course_id', $course->id)->first();

        if ($user_exam) {
            return redirect()->to('/certificates/' . $user_exam->id);
        }

        return view('exam', ['course' => $course]);
    }

    public function post_exam($id, $slug, Request $request)
    {
        $course = Course::findOrFail($id);

        if (count($course->course_exams) == 0) {
            abort(404);
        }

        $user = Auth()->user();

        $user_exam = \App\Models\UserExam::where('user_id', $user->id)->where('course_id', $course->id)->first();

        if ($user_exam) {
            abort(404);
        }

        $results = $request->all();

        $trueCount = 0;
        $allCount = count($course->course_exams);

        foreach ($course->course_exams as $exam) {

            if ($request->has($exam->id) && $request->input($exam->id) == $exam->correct_variant) {
                $trueCount++;
            }

        }

        $certificated = false;

//        if ($allCount * 0.7 <= $trueCount) {
        $certificated = true;


        $sertificate = \App\Models\UserExam::create([
            'user_id' => $user->id,
            'course_id' => $id,
            'correct_count' => $trueCount,
            'certificated' => $certificated
        ]);
//        }


        if ($certificated) {
            return redirect()->to('/certificates/' . $sertificate->id);
        }

        return redirect()->to('/courses/' . $id . '-' . \Str::slug($course->title))->with($certificated ? 'success' : 'error', $certificated ? __('third.certificate_added') : __('third.certificate_not_added'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        $mentors = UserModel::where('status', 'mentor')
            ->where(function ($query) use ($keyword) {
                $query->where('fullname_az', 'like', '%' . $keyword . '%')
                    ->orWhere('fullname_en', 'like', '%' . $keyword . '%')
                    ->orWhere('fullname', 'like', '%' . $keyword . '%')
                    ->orWhere('speciality_az', 'like', '%' . $keyword . '%')
                    ->orWhere('speciality_en', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%' . $keyword . '%');
            })
            ->where('is_active',1)
            ->orderBy('id', 'desc')
            ->get();

        $courses = collect();
        $blogs = collect();
        $events = collect();
        $trainers = collect();

        if (url()->previous() != url('/mentors')) {
            $trainers = UserModel::where('status', 'teacher')
                ->where(function ($query) use ($keyword) {
                    $query->where('fullname_az', 'like', '%' . $keyword . '%')
                        ->orWhere('fullname_en', 'like', '%' . $keyword . '%')
                        ->orWhere('fullname', 'like', '%' . $keyword . '%')
                        ->orWhere('speciality_az', 'like', '%' . $keyword . '%')
                        ->orWhere('speciality_en', 'like', '%' . $keyword . '%')
                        ->orWhere('content', 'like', '%' . $keyword . '%');
                })
                ->where('is_active',1)
                ->orderBy('id', 'desc')
                ->get();

            $courses = Course::where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%' . $keyword . '%')
                    ->orWhere('about', 'like', '%' . $keyword . '%')
                    ->orWhere('tags', 'like', '%' . $keyword . '%');
            })
                ->orderBy('id', 'desc')
                ->get();

            $blogs = Blog::where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%' . $keyword . '%')
                    ->orWhere('content_az', 'like', '%' . $keyword . '%')
                    ->orWhere('tags', 'like', '%' . $keyword . '%');
            })
                ->orderBy('id', 'desc')
                ->get();

            // Query for events
            $events = Event::where(function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%' . $keyword . '%')
                    ->orWhere('organizer', 'like', '%' . $keyword . '%')
                    ->orWhere('place', 'like', '%' . $keyword . '%');
            })
                ->where('start_date', '>', Carbon::today())
                ->orderBy('id', 'desc')
                ->get();
        }
        return view('search', compact('keyword', 'mentors', 'courses', 'blogs', 'trainers', 'events','trainers'));
    }
}
