<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    public $translatable = ['fullname_', 'bio_'];
    protected $appends = [
        'ratingAndStudents', 'rating', 'student_count'
    ];

    protected $guarded = [];

    public function user_exams()
    {
        return $this->hasMany(UserExam::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function course_comments()
    {
        return $this->hasMany(CourseComment::class);
    }

    public function getRatingAndStudentsAttribute()
    {
        $students = 0;
        $rating_count = 0;
        $ratings = 0;
        $courses = $this->courses();

        foreach ($courses as $course) {
            $students += count($course->course_users);

            foreach ($course->course_reviews as $review) {
                $ratings += $review->review;
                $rating_count++;
            }
        }

        $rating = number_format($ratings / ($rating_count == 0 ? 1 : $rating_count), 2);

        return ['rating' => $rating, 'students' => $students];
    }

    public function getRatingAttribute()
    {
        return $this->ratingAndStudents['rating'];
    }

    public function getStudentCountAttribute()
    {
        return $this->ratingAndStudents['students'];
    }
}
