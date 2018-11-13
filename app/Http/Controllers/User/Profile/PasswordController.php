<?php

namespace App\Http\Controllers\User\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Account\PasswordUpdated;
use App\Http\Requests\Account\PasswordStoreRequest;

class PasswordController extends Controller
{
    public function show()
    {
        return view('users.employer.profile.password');
    }
    
    public function store(PasswordStoreRequest $request)
    {
        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);
        
        Mail::to($request->user())->send(new PasswordUpdated());
        
        return redirect()->route('employer.profile.password')->withSuccess('Password updated.');
    }
}
