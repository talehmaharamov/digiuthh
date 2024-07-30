<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $trainers = \App\Models\User::where('status', 'teacher')->where('is_active', true)->orderBy('id', 'desc')->paginate(8);
        $mentors = \App\Models\User::where('status', 'mentor')->where('is_active', true)->orderBy('id', 'desc')->paginate(8);
        $events = \App\Models\Event::where('start_date', '>', Carbon::today())->orderBy('id', 'desc')->orderBy('id', 'desc')->take(3)->get();
        $categories = \App\Models\CourseCategory::orderBy('id', 'desc')->take(6)->get();
        return view('home', compact('events', 'trainers', 'categories', 'mentors'));
    }
}
