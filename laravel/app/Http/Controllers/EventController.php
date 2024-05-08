<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function all_events()
    {
    	//
        $events = Event::where('start_date', '>', Carbon::today())->orderBy('id', 'desc')->paginate(10);
        return view('events.all', compact('events'));
    }

    public function single_event($id, $slug)
    {
        $event = Event::findOrFail($id);
        
        $event_user = EventUser::where('event_id', $id)->where('user_id', auth()->user()->id ?? 0)->count();
        
        return view('events.single', compact('event', 'event_user'));
    }

    public function join($id, Request $request)
    {
        $event = Event::findOrFail($id);

        $count = EventUser::where('user_id', auth()->user()->id)->where('event_id', $event->id)->first();

        if($count) {
            return redirect()->back();
        }

        EventUser::create([
            'event_id' => $event->id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back();
    }
}
