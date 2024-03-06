<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Resources\UserCollection;
use App\Models\Blogs;
use App\Models\Events;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Contracts\Service\Attribute\Required;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }
    /**
     * Display the user's profile form.
     */
    public function index(){
            $user = User::find(Auth::user()->id);
            // dd($user);
        return inertia('Components/Profile/profile',[
            // 'user' => new UserCollection($user),
            'user' => $user,
            'blogs' =>  Blogs::where('user_id','=',Auth::user()->id)->count(),
            'events' =>  Events::where('user_id','=',Auth::user()->id)->count()
        ]);
    }
    //update
    public function profileUpdate(){
        $bio = request()->validate([
            'bio' => 'required',
            'faculty' => 'required'
        ]);
        if(request()->hasFile('profilePicture')){
            $file = request()->file('profilePicture')->store('profiles','public');
            $profile = '/storage/'.$file;
        }else{
            $profile = User::find(Auth::user()->id)->profilePicture;
        }


        User::where('id','=',Auth::user()->id)->update([
            'bio' => $bio['bio'],
            'faculty' => $bio['faculty'],
            'profilePicture' => $profile,
        ]);
        return redirect('/');
    }
    //edit
    public function profileEdit(){
        $bio = request()->validate([
            'bio' => 'required',
        ]);
        if(request()->hasFile('profilePicture')){
            $file = request()->file('profilePicture')->store('profiles','public');
            $profile = '/storage/'.$file;
        }else{
            $profile = User::find(Auth::user()->id)->profilePicture;
        }

        User::where('id','=',Auth::user()->id)->update([
            'bio' => $bio['bio'],
            'profilePicture' => $profile,
        ]);
        return redirect('/profile');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
    }

    public function bio(){
        return inertia('Components/Profile/bio');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
