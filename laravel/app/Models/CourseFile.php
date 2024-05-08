<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CourseFile extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['title'];

    public function course_episode()
    {
        return $this->belongsTo(CourseEpisode::class);
    }
}
