<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AllBlogsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request)
    {
        // return parent::toArray($request);
        return $this->collection->map(function ($blogs) {
            return [
                'id' => $blogs->id,
                'user_id' => $blogs->user_id,
                'Title' => $blogs->Title,
                'mini_title' => $blogs->mini_title,
                'description' => $blogs->description,
                'banner' => $blogs->banner,
                'faculty' => $blogs->faculty,
                'created_at' => $blogs->created_at->format(' M D Y'),
                'user' => [
                    'id' => $blogs->user->id,
                    'firstname' => $blogs->user->firstname,
                    'lastname' => $blogs->user->lastname,
                    'username' => $blogs->user->username,
                    'faculty' => $blogs->user->faculty,
                    'profilePicture' => $blogs->user->profilePicture 
                ],
                // 'comments'=> [
                //     'id' => $blogs->comments->id,
                //     'user_id'=> $blogs->comments->user_id,
                //     'blog_id'=> $blogs->comments->blog_id,
                //     'comments'=> $blogs->comments->comments,
                // ]
            ];
        });
    }
}
