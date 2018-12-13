<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobSeeker\ProfileStoreRequest;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
    	$user = $request->user();

    	return view('jobseekers.profile.edit', compact('user'));
    }

    public function store(ProfileStoreRequest $request)
    {
        $user_value = ['name', 'email'];
        
        if(!empty($request->avatar_id)){
            $user_value = array_merge($user_value, ['avatar_id']);
        }
        
        $request->user()
        ->update($request->only($user_value));

        $seeker_value = ['address', 'phone', 'birthday', 'gender', 'newsletter'];
        $request->user()->seeker()
        ->update($request->only($seeker_value));

        return back()->withSuccess('Account details updated.');
    }
}
