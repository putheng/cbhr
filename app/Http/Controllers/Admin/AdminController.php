<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Company, Listing, Role};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function home()
    {   
        return view('admin.home');
    }
    
}
