<?php

use App\Http\Controllers\BlogsController;
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

Route::get('/', function () {
    return inertia('Layouts/Home');
});

Route::get('/events',function(){
    return inertia('Layouts/Home');
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
});

// Route::get('/blog/1',function(){
//     return inertia('Layouts/Home');
// });

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



Route::get('/blogs',[BlogsController::class,'index']);