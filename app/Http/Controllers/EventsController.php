<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllEventsCollection;
use App\Models\Events;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    public function index(){
        $events = Events::paginate(6);
        return inertia('Layouts/EventLayout',['events'=>new AllEventsCollection($events)]);
    }

    public function facultyEvents(){
        $events = Events::all();
        $selectedEvents = $events->where('faculty','=',request('faculty'));
        return inertia('Layouts/EventLayout',[
            'events' => new AllEventsCollection($selectedEvents)
        ]);
    }

    public function getFacultyEvents(){
        $events = Events::all();
        $selectedEvents = $events->where('faculty','=',request('faculty'));
        return inertia('Layouts/EventLayout',[
            'events' => new AllEventsCollection($selectedEvents)
        ]);
    }

    public function createEvent(){
        
        $event = request()->validate([
            'Title' => 'required',
            'location' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
            'info' => 'required',
            'faculty' => 'required'
        ]);

        // $event['banner'] = request('banner')->store('events','public');
        $event['banner'] = 'none';
        $event['user_id'] = Auth::user()->id;
        
        Events::create($event);

        return redirect('/events');
    }

    public function manage(){
        return inertia('Components/Manage/Events',[
            'events' =>Events::where('user_id','=',Auth::user()->id)->get()
        ]);
    }
    public function delete(){
        Events::where('user_id','=',Auth::user()->id)->delete();
        return back();
    }
}
