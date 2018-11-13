<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Account\PasswordUpdated;
use App\Http\Requests\Account\PasswordStoreRequest;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.account.password');
    }
    
    public function store(PasswordStoreRequest $request)
    {
        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);
        
        Mail::to($request->user())->send(new PasswordUpdated());
        
        return redirect()->route('admin.account.password')->withSuccess('Password updated.');
    }
}
