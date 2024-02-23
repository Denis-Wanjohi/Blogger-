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
       ]);
    }

    // public function getFacultyBlogs(){
    //     return redirect()->route('facultyBlogs');
    // }
    function facultyBlogs(){
        $blogs = Blogs::all();
        $scienceBlogs = $blogs->where('faculty','=',request('faculty'));
        return inertia('Layouts/Home',[
            'blogs' => $scienceBlogs
        ]);
    }

    public function postBlog(){
        $blog = request()->validate([
            'title' => 'required',
            'mini_title' => 'required',
            'description' => 'required',
            'faculty' => 'required'
        ]);
        if(request()->hasFile('banner')){
            $blog['banner'] = request('banner')->store('blogs','public');
        }
        $blog['user_id'] = 1;

        Blogs::create($blog);
        return redirect('/');
    }
}
