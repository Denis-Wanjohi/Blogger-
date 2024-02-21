<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/blog/{id}',[BlogsController::class,'index']);

Route::group(['prefix' => '/'],function(){
    Route::get('/',[BlogsController::class,'index']);
    Route::post('blogs/{faculty}',[BlogsController::class,'facultyBlogs']);
});


Route::get('/events',[EventsController::class,'event']);

Route::group(['prefix' => '/events'],function(){
    Route::post('/{faculty}',[EventsController::class,'facultyBlogs']);
});

Route::group(['prefix' => 'profile'],function(){
    Route::get('/',function(){
        return inertia('Components/Profile/profile');
    });
});

Route::group(['prefix'=>'auth'],function(){
    Route::get('login',function(){
        return inertia('Components/Blogs/Blog');
    });
    // Route::post('login',function(){
    //     dd(request());
    // });
    Route::get('register',function(){
        return inertia('Components/Auth/Register');
    });
    // Route::post('register',[Controller::class,'register']);
});

Route::post('/auth/register',[Controller::class,'register']);

Route::group(['prefix' => 'post'],function(){
    Route::get('blog',function(){
        return inertia('Components/Post/PostBlog');
    });

    Route::get('event',function(){
        return inertia('Components/Post/PostEvent');
    });
});

Route::get('/post/blog',function(){
    return inertia('Components/Post/PostBlog');
});

Route::get('/post/event',function(){
    return inertia('Components/Post/PostEvent');
});
