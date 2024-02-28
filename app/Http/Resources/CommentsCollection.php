<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request)
    {
        // return parent::toArray($request);

        return $this->collection->map(function($comments){
            return[
                'id' => $comments->id,
                'blog_id' => $comments->blog_id,
                'user_id' => $comments->user_id,
                'comments'  => $comments->comments,
                'user' =>[
                    'id' => $comments->user->id,
                    'firstname' => $comments->user->firstname,
                    'lastname' => $comments->user->lastname,
                    'username' => $comments->user->username,
                    'faculty' => $comments->user->faculty,
                    'profilePicture' => $comments->user->profilePicture 
                ],
            ];
        });
    }
}
