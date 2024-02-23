<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function event(){
        $events = Events::paginate(6);

        return inertia('Layouts/EventLayout',['events'=>$events]);
    }

    public function facultyBlogs(){
        $events = Events::all();
        $event = $events->where('faculty','=',request('faculty'));
        return inertia('Layouts/EventLayout',[
            'events' => $event
        ]);
    }

    public function postEvent(){
        
        $event = request()->validate([
            'Title' => 'required',
            'location' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
            'info' => 'required',
            'faculty' => 'required'
        ]);

        $event['banner'] = request('banner')->store('events','public');
        
        Events::create($event);

        return redirect('/');
    }
}
