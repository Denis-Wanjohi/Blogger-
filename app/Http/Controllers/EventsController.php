<?php

namespace App\Http\Controllers;

use App\Models\Events;
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
}
