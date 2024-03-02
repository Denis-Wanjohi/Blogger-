<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request)
    {
        // return parent::toArray($request);
        $user =  $this->collection->first();

        if($user){
            return [
                'id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'username' => $user->username,
                'email' => $user->email,
                'faculty' => $user->faculty,
                'profilePicture' => $user->profilePicture,
                'bio' => $user->bio,
                // 'blog' => $user->blogs->map(function($blogs){
                //     return[
                //         'id' => $blogs->id,
                //         'user_id' => $blogs->user_id,
                //         'Title' => $blogs->Title,
                //         'mini_title' => $blogs->mini_title,
                //         'description' => $blogs->description,
                //         'banner' => $blogs->banner,
                //         'faculty' => $blogs->faculty,
                //     ];
                // }),
            ];
        }
    }
}
