<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllBlogsCollection;
use App\Http\Resources\CommentsCollection;
use App\Http\Resources\LikesCollection;
use App\Models\Blogs;
use App\Models\Comments;
use App\Models\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    function index(){
    $blogs = Blogs::all();
    $comments = Comments::all();
    $likes = Likes::whereNull('user_id')->get();
   

       return inertia('Layouts/Home',[
           'blogs' => new AllBlogsCollection($blogs),
           'comments' => new CommentsCollection($comments),
           'likes' => new LikesCollection($likes)
            
       ]);
    }

    function facultyBlogs(){
        $blogs = Blogs::all();
        $comments = Comments::all();
        $likes = Likes::whereNull('user_id')->get();
        // dd(request('faculty'));
        $selectedBlogs = $blogs->where('faculty','=',request('faculty'));
        return inertia('Layouts/Home',[
            'blogs' => new AllBlogsCollection($selectedBlogs),
            'comments' => new CommentsCollection($comments),
            'likes' => new LikesCollection($likes)
        ]);
    }

    public function getFacultyBlogs(){
        $blogs = Blogs::all();
        $comments = Comments::all();
        $likes = Likes::whereNull('user_id')->get();
        $selectedBlogs = $blogs->where('faculty','=',request('faculty'));
        return inertia('Layouts/Home',[
            'blogs' => new AllBlogsCollection($selectedBlogs),
            'comments' => new CommentsCollection($comments),
            'likes' => new LikesCollection($likes)
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
        //getting the blog id
        $currentBlogId = Blogs::where('title','=', $blog['title'])->get('id');
        // dd($currentBlogId[0]['id']);
        Likes::create([
            'blogs_id'=>$currentBlogId[0]['id'],
            'likes' => 0,
            'dislikes' => 0,
            'liked' => false,
            'disliked' => false
        ]);
        
        return redirect('/');
    }

    public function like(){
        $blog_id = request('id');
        $liked = null;
        $disliked = false;
        $likes = Likes::where('blogs_id','=',$blog_id)->value('likes');
        $dislikes = Likes::where('blogs_id','=',$blog_id)->value('dislikes');
        $noOfLikes = Likes::where('blogs_id',$blog_id)->whereNull('user_id')->sum('likes');

        
        //value 0= liked 1=unliked
        // dd(request('value'));
        if(request('value') == 0){
            Likes::where('blogs_id',$blog_id)->update(['liked' => true]);
            Likes::where('blogs_id','=',$blog_id)->increment('likes',1);
            $liked = true;
        }elseif(request('value') ==  1){
            Likes::where('blogs_id',$blog_id)->update(['liked' => false]);
            Likes::where('blogs_id','=',$blog_id)->decrement('likes',1);
            $liked = false;

        }

        Likes::updateOrInsert([
            'user_id' => auth()->user()->id,
            'blogs_id' => $blog_id,
            'likes' => $likes,
            'dislikes' => $dislikes,
            'liked' => $liked,
            'disliked' => $disliked
        ]);
        return back()->with('liked',true);
    }
    public function dislike(){
        $blog_id = request('id');
        // Likes::updateOrInsert([
        //     user
        // ]);
        //value 0= liked 1=unliked
        if(request('value') == 0){
            Likes::where('blogs_id','=',$blog_id)->increment('dislikes',1);
        }elseif(request('value') ==  1){
            Likes::where('blogs_id','=',$blog_id)->decrement('dislikes',1);
        }
        return back();
    }
}
