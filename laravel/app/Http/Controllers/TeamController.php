<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __invoke($id, $slug)
    {
        $team = Team::findOrFail($id);

        //if(slug($team->fullname) !== $slug) {
          //  return redirect()->to('team/' . $id . '-' . slug($team->slug));
        //}}

        return view('team', compact('team'));
    }
}
