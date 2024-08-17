<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MentorCategory extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['title'];

    public function mentor()
    {
        return $this->belongsTo(User::class, 'id', 'mentor_category_id')->where('status', 'mentor');
    }
}
