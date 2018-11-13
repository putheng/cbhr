<?php

namespace App\Http\Controllers\User\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\ProfileStoreRequest;

class ProfileController extends Controller
{
    public function show()
    {
        return view('users.employer.profile.index');
    }
    
    public function store(ProfileStoreRequest $request)
    {
        $value = ['name', 'email'];
        
        if(!empty($request->avatar_id)){
            $value = array_merge($value, ['avatar_id']);
        }
        
        $request->user()->update($request->only($value));

        return back()->withSuccess('Account details updated.');
    }
    
    public function edit(Request $request)
    {
        return view('users.employer.profile.edit')->with(['user' => $request->user()]);
    }
}
