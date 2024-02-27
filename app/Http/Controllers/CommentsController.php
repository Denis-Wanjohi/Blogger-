<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    
    //
    public function create(){
        // dd('one');
        $blog = Blogs::find(request('data'));
        dd($blog);
    }
 
    //
}
