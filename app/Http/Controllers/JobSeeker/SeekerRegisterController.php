<?php

namespace App\Http\Controllers\JobSeeker;

use App\User;
use App\Models\Seeker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobSeeker\RegisterFormRequest;

class SeekerRegisterController extends Controller
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
        $seker->gender = $request->gender;
        $seker->newsletter = $newsletter;
        
        $seeker->user()->associate($user);
        $seeker->save();

        dd($seeker);
    }
}
