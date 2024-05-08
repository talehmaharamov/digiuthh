<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CourseEpisode extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['title', 'content'];
    
    protected $guarded = ['id'];

    public function course_section()
    {
        return $this->belongsTo(CourseSection::class);
    }

    public function course_files()
    {
        return $this->hasMany(CourseFile::class);
    }
}
