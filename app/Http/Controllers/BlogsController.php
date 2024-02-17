<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    function index(){
    
       return inertia('Layouts/Home',[
           'blogs' =>  Blogs::paginate(6)
       ]);
    }

    function scienceBlogs(){
        $scienceBlogs = Blogs::paginate(3);
        return inertia('Layouts/test',[
            'blog' => $scienceBlogs
        ]);
    }
}
