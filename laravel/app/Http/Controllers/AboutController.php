<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutVideo;
use App\Models\Blog;
use App\Models\Partner;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $partners = Partner::all();
        $teams = Team::all();
        return view('about', compact('partners', 'teams'));
    }
}
