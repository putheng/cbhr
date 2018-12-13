<?php

namespace App\Http\Controllers\JobSeeker;

use Auth;
use App\User;
use App\Models\Seeker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobSeeker\RegisterFormRequest;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('jobseekers.auth.register');
    }

    public function store(RegisterFormRequest $request)
    {
    	$newsletter = $request->newsletter == 'on' ? 1 : 0;

    	$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'active' => true,
        ]);

        $user->giveRoleTo('jobseeker');

        $seeker = new Seeker;

        $seeker->phone = $request->phone;
        $seeker->gender = $request->gender;
        $seeker->newsletter = $newsletter;
        
        $seeker->user()->associate($user);
        $seeker->save();

        Auth::login($user);

        return redirect()->to(role_url());
    }
}