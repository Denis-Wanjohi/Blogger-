<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    function index(){
    $blogs = Blogs::all();
    // $blog = $blogs->where('faculty','=','Science');
       return inertia('Layouts/Home',[
           'blogs' =>  $blogs
       ]);
    }

    function facultyBlogs(){
        $blogs = Blogs::all();
        $scienceBlogs = $blogs->where('faculty','=',request('faculty'));
        return inertia('Layouts/Home',[
            'blogs' => $scienceBlogs
        ]);
    }
}
