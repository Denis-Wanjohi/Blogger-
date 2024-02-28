<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllBlogsCollection;
use App\Http\Resources\CommentsCollection;
use App\Models\Blogs;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    function index(){
    $blogs = Blogs::all();
    $comments = Comments::all();
       return inertia('Layouts/Home',[
           'blogs' => new AllBlogsCollection($blogs),
           'comments' => new CommentsCollection($comments)
            
       ]);
    }

    function facultyBlogs(){
        $blogs = Blogs::all();
        $comments = Comments::all();
        // dd(request('faculty'));
        $selectedBlogs = $blogs->where('faculty','=',request('faculty'));
        return inertia('Layouts/Home',[
            'blogs' => new AllBlogsCollection($selectedBlogs),
            'comments' => new CommentsCollection($comments)

        ]);
    }

    public function getFacultyBlogs(){
        $blogs = Blogs::all();
        $comments = Comments::all();
        $selectedBlogs = $blogs->where('faculty','=',request('faculty'));
        return inertia('Layouts/Home',[
            'blogs' => new AllBlogsCollection($selectedBlogs),
            'comments' => new CommentsCollection($comments)

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
            $file = request('banner')->store('blogs','public');
        }
        $blog['user_id'] = Auth::user()->id;
        $blog['banner'] = "/storage/".$file;

        Blogs::create($blog);
        return redirect('/');
    }
}
