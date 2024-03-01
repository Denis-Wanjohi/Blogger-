<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class LikesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request)
    {
        // return parent::toArray($request);
        return $this->collection->map(function($likes){
            return [
                'id' => $likes->id,
                // 'user' =>[
                //     'id' => $likes->user->id,
                //     'firstname' => $likes->user->firstname,
                //     'lastname' => $likes->user->lastname,
                //     'username' => $likes->user->username,
                //     'faculty' => $likes->user->faculty,
                //     'email' => $likes->user->email,
                //     'profilePicture'  =>  $likes->user->profilePicture
                // ],
                // 'blog' =>[
                //     'id' => $likes->blog->id,
                //     'user_id' => $likes->blog->user_id
                // ],
                'likes' => $likes->likes,
                'dislikes' =>  $likes->dislikes,

            ];
        });
    }
}
