<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasFactory, HasTranslations;

    protected $appends = ['rating'];

    public function getRatingAttribute()
    {
        $avg = collect($this->course_reviews)->avg('review');
        return number_format($avg ?? 0, 2);
    }

    public array $translatable = ['title', 'content', 'about'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course_category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function course_sections()
    {
        return $this->hasMany(CourseSection::class);
    }

    public function course_comments()
    {
        return $this->hasMany(CourseComment::class);
    }

    public function course_reviews()
    {
        return $this->hasMany(CourseReview::class);
    }

    public function course_users()
    {
        return $this->hasMany(CourseUser::class);
    }

    public function course_exams()
    {
        return $this->hasMany(CourseExam::class);
    }

    public function user_exams () {
        return $this->hasMany(UserExam::class);
    }
    
     public static function boot()
    {
        parent::boot();

        self::creating(function($model){
           
        });

        self::created(function($model){
            if($model->user_id === null) {
                $model->user_id = auth()->user()->id;
            }
        });

        self::updating(function($model){
            // ... code here
        });

        self::updated(function($model){
            // ... code here
        });

        self::deleting(function($model){
            // ... code here
        });

        self::deleted(function($model){
            // ... code here
        });
    }

}
