<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CourseExam extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = [
        'question',
        'variant_a',
        'variant_b',
        'variant_c',
        'variant_d',
        'variant_e',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
