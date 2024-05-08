<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Event extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['title', 'organizer', 'place', 'content'];

    protected $casts = [
        'start_date' => 'datetime'
    ];
    
    public function event_users()
    {
        return $this->hasMany(EventUser::class);
    }
}
