<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImpersonateController extends Controller
{
    public function index()
    {
        return view('users.admin.impersonate');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
        ]);
        
        $user = User::where('email', $request->email)->first();
        
        session()->put('impersonate', $user->id);
        
        return redirect()->to(role_url());
    }
    
    public function destroy()
    {
        session()->forget('impersonate');
        
        return redirect()->route('admin.impersonate.index')
                ->withSuccess('Impersonating stoped');
    }
    
    public function updateRoles()
    {
        $users = User::get();
        
        foreach($users as $user){
            if($user->email != 'puthengemail@gmail.com'){
                $user->updateRoles('employer');
            }
        }
    }
}
