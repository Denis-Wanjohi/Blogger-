<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    
    //
    public function create(){     

        // dd(Auth::user()->id);
        $comment['user_id'] = Auth::user()->id;
        $comment['blog_id'] = request('data');
        $comment['comments'] = request('comment');

        Comments::create($comment);
        return back();
    }
 
    //
}
