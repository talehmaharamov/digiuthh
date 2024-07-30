<?php

use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


Auth::routes();
Route::get('en', [\App\Http\Controllers\LanguageController::class, 'setEn']);
Route::get('az', [\App\Http\Controllers\LanguageController::class, 'setAz']);

//Route::get('/', function () {
//   return view("whatsapp");
//});

Route::get('/', \App\Http\Controllers\HomeController::class);
Route::get('/about', \App\Http\Controllers\AboutController::class);
Route::get('/team/{id}-{slug}', \App\Http\Controllers\TeamController::class);

Route::get('/courses', [\App\Http\Controllers\CourseController::class, 'all_courses']);

Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'all_blogs']);
Route::get('/blogs/category/{id}-{slug}', [\App\Http\Controllers\BlogController::class, 'category']);
Route::get('/blogs/{id}-{slug}', [\App\Http\Controllers\BlogController::class, 'single_blog']);


Route::get('/news', [\App\Http\Controllers\BlogController::class, 'all_news']);
Route::get('/news/category/{id}-{slug}', [\App\Http\Controllers\BlogController::class, 'categoryN']);
Route::get('/news/{id}-{slug}', [\App\Http\Controllers\BlogController::class, 'single_news']);

Route::get('/events', [\App\Http\Controllers\EventController::class, 'all_events']);
Route::get('/events/{id}-{slug}', [\App\Http\Controllers\EventController::class, 'single_event']);

Route::get('/trainers', [\App\Http\Controllers\TrainerController::class, 'all_trainers']);
Route::get('/trainers/{id}-{slug}', [\App\Http\Controllers\TrainerController::class, 'single_trainer']);

Route::get('/mentors', [\App\Http\Controllers\MentorController::class, 'all_mentors']);
Route::get('/mentors/{id}-{slug}', [\App\Http\Controllers\MentorController::class, 'single_mentor']);

Route::get('/contact', \App\Http\Controllers\ContactController::class);
Route::post('/contact', \App\Http\Controllers\FeedbackController::class);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/courses/category/{id}-{slug}', [\App\Http\Controllers\CourseController::class, 'category']);

    //single course's old ground
    Route::get('/courses/{id}-{slug}/exam', [\App\Http\Controllers\CourseController::class, 'course_exam']);
    Route::post('/courses/{id}-{slug}/exam', [\App\Http\Controllers\CourseController::class, 'post_exam']);

    Route::get('/certificates/{id}', [\App\Http\Controllers\SertificateController::class, 'single_sertificate']);
    Route::get('/certificates', [\App\Http\Controllers\SertificateController::class, 'all_sertificates']);


    //Comment Route
    Route::post('/course/post-comment', [CourseController::class, 'post_comment'])
        ->name('post-comment');
    Route::post('/course/{course_id}/rate/{rating}/{user_id}', [CourseController::class, 'rate'])->name('rate');

    Route::post('/join-event/{id}', [\App\Http\Controllers\EventController::class, 'join']);

    Route::get('/my-courses', [\App\Http\Controllers\CourseController::class, 'myCourses']);
});

// new ground of single course
Route::get('/courses/{id}-{slug}', [\App\Http\Controllers\CourseController::class, 'single_course'])
    ->name('singleCourse');


Route::middleware('auth')->group(function () {


    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/');
    })->middleware(['auth', 'signed'])->name('verification.verify');
    Route::post('/email/verification-notification', function (Request $request) {
        //dd(auth()->user());
        auth()->user()->sendEmailVerificationNotification();

        return redirect()->to('/')->with('success', __('third.verify_success_message'));
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
    Route::get('/verify', \App\Http\Controllers\VerificationController::class)->name('verification.notice');
});


Route::get('/check-authentication', [LoginController::class, 'checkAuthentication'])
    ->name('check-authentication');

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');
Route::post('/post-login', [LoginController::class, 'postLogin'])
    ->name('post.login');

Route::get('/forgot-password', [ForgotPasswordController::class, 'view'])
    ->name('forgot.password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendMail']);
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'resetView'])->name('reset.password.get');
Route::post('reset-password/{token}', [ForgotPasswordController::class, 'changePass']);

Route::get('register/teacher', [TeacherController::class, 'index'])
    ->name('login.teacher');
Route::post('register/teacher', [TeacherController::class, 'register'])
    ->name('register.teacher');

Route::get('register/mentor', [\App\Http\Controllers\MentorController::class, 'index'])
    ->name('login.mentor');
Route::post('send-mail/mentor', [\App\Http\Controllers\MentorController::class, 'sendMail'])
    ->name('send-mail.mentor');
Route::post('register/mentor', [\App\Http\Controllers\MentorController::class, 'register'])
    ->name('register.mentor');

Route::get('register/student', [StudentController::class, 'index'])
    ->name('login.student');
Route::post('register/student', [StudentController::class, 'register'])
    ->name('register.student');

Route::middleware(['auth', 'prevent-back-history'])->group(function () {
    Route::get('update-profile', [UpdateController::class, 'index'])
        ->name('update-profile');
    Route::post('update-profile-post/{id}', [UpdateController::class, 'update'])
        ->whereNumber('id')
        ->name('update.profile.post');

    Route::get('logout', [LoginController::class, 'logout'])
        ->name('logout');
});


Route::post('/ajax/courses', function (Request $request) {
    //dd($request->all());
    $courses = \App\Models\Course::whereIn('course_category_id', $request->ids);

    if ($request->my === "false") {
        return view('master.course', ['courses' => $courses->get()]);
    }

    return view('master.course', ['courses' => $courses->whereHas('course_users', function ($query) {
        return $query->where('user_id', auth()->user()->id);
    })->get()]);
});


Route::get('/bunny', function () {

    // // $adapter = new BunnyCDNAdapter(
    //           $adapter = new BunnyCDNClient(
    //                 'digiuthcdn',
    //                 'cff04666-455b-4901-ab4a-0a0cb150e330',
    //                 'de'
    //             );
    //             // ,
    //             // 'https://digiuthcdn.b-cdn.net' # Optional
    //         // );

    // $adapter->upload('index.csv', 'salam');

    \Storage::disk('bunnycdn')->url('index.txt', 'salam');

    // return response(\Storage::disk('bunnycdn')->get('1614953132.jpeg'));
});
