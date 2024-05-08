<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function all_trainers()
    {
        $trainers = User::where('status','teacher')
            ->orderBy('id', 'desc')
            ->where('is_active',true)
            ->paginate(12);
        return view('trainers.all', compact('trainers'));
    }

    public function single_trainer($id, $slug)
    {
        $team = User::findOrFail($id);
        return view('trainers.single', compact('team'));
    }
}
