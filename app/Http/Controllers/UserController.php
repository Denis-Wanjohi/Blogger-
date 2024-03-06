<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\MimeTypeDetection\FinfoMimeTypeDetector;

class UserController extends Controller
{
    public function register(){
        // dd("user controller");
        $user = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
     
        $newUser = User::create($user);
        Auth::login($newUser);
        return inertia("/Profile/Bio");
        // return redirect('/');

    }

    public function login(){
        $details = request()->validate([
            'password' => 'required',
            'email' => 'required',
        ]); 

        if(Auth::attempt($details)){
            request()->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'credentials doesnt match our records'
        ])->onlyInput('email');
    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
    }
}
