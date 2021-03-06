<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Account\PasswordUpdated;
use App\Http\Requests\Account\PasswordStoreRequest;

class PasswordController extends Controller
{
    public function index()
    {
    	return view('jobseekers.profile.password');
    }

    public function store(PasswordStoreRequest $request)
    {
        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);
        
        Mail::to('puthengemail@gmail.com')->send(new PasswordUpdated());
        
        return redirect()->route('seeker.profile.password')->withSuccess('Password updated.');
    }
}
