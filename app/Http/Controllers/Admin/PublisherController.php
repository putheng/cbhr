<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublisherController extends Controller
{
    public function show(Request $request)
    {
        $users = Role::getUser(4)->paginate(10);
        
        return view('admin.publisher.show', compact('users'));
    }
}
