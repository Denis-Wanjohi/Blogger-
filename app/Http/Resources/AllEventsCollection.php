<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AllEventsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request)
    {
        // return parent::toArray($request);

    


        return $this->collection->map(function ($events){
            return [
                'id' => $events->id,
                'user_id' => $events->user_id,
                'Title' => $events->Title,
                'location' =>  $events->location ,
                'start_time' =>  $events->start_time,
                'end_time' =>  $events->end_time,
                'date' =>  $events->date,
                'info' =>  $events->info,
                'faculty' =>  $events->faculty,
                'user' => [
                    'id' =>  $events->user->id,
                    'firstname' => $events->user->firstname,
                    'lastname' => $events->user->lastname,
                    'username'=> $events->user->username,
                    'faculty'=> $events->user->faculty,
                    'profilePicture'=> $events->user->profilePicture
                ]
            ];
        });
    }
}
