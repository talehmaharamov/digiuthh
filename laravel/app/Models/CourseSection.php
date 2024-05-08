<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CourseSection extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['title'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function course_episodes()
    {
        return $this->hasMany(CourseEpisode::class);
    }
}
