<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    function index(){
    
       return inertia('Layouts/Home',[
           'blogs' =>  Blogs::all()
       ]);
    }
}
