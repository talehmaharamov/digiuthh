<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CourseObserver
{
    /**
     * Handle the Course "created" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function created(Course $course)
    {
        $id = $course->id;
        $courseOriginal = DB::table('courses')->where('id', $id)->first();
        $title = json_decode($courseOriginal->title);
        $title_az = $title->az;
        $title_en = $title->en;

        if (session()->get('locale') == 'az') {
            $title->az == '' || $title->az == null
                ? $title->az = $title_en
                : $title->az = $title_az;
        }

        if (session()->get('locale') == 'en') {
            $title->en == '' || $title->en == null
                ? $title->en = $title_az
                : $title->en = $title_en;
        }

        $courseOriginal->update(['title' => [
            'en' => $this->title_en,
            'az' => $this->title_az
        ]]);
    }

    /**
     * Handle the Course "updated" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function updated(Course $course)
    {
        $id = $course->id;
        $courseOriginal = DB::table('courses')->where('id', $id)->first();
        $title = json_decode($courseOriginal->title);
        $title_az = $title->az;
        $title_en = $title->en;

        if (session()->get('locale') == 'az') {
            $title->az == '' || $title->az == null
                ? $title->az = $title_en
                : $title->az = $title_az;
        }

        if (session()->get('locale') == 'en') {
            $title->en == '' || $title->en == null
                ? $title->en = $title_az
                : $title->en = $title_en;
        }

        $courseOriginal->update(['title' => [
            'en' => $this->title_en,
            'az' => $this->title_az
        ]]);
    }

    /**
     * Handle the Course "deleted" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function deleted(Course $course)
    {
        //
    }

    /**
     * Handle the Course "restored" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function restored(Course $course)
    {
        //
    }

    /**
     * Handle the Course "force deleted" event.
     *
     * @param \App\Models\Course $course
     * @return void
     */
    public function forceDeleted(Course $course)
    {
        //
    }
}
