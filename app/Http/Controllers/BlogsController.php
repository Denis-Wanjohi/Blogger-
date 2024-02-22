<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    function index(){
    $blogs = Blogs::all();
    // $blog = $blogs->where('faculty','=','Science');
       return inertia('Layouts/Home',[
           'blogs' =>  $blogs,
           'user' => Auth::user()
       ]);
    }

    function facultyBlogs(){
        $blogs = Blogs::all();
        $scienceBlogs = $blogs->where('faculty','=',request('faculty'));
        return inertia('Layouts/Home',[
            'blogs' => $scienceBlogs,
           'user' => Auth::user()
        ]);
    }
}
