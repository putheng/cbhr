<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    public function show(Request $request)
    {
        $users = Role::getUser(4)->orderBy('id', 'desc')->paginate(10);
        
        return view('admin.employer.show', compact('users'));
    }
}
