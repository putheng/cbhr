<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Company, Listing, Role};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function home()
    {
        $companies = Company::with('user')->latestFirst()->paginate(10);
        
        $publishers = Role::GetUser(2)->count();
        
        $listings = Listing::latestFirst()->isLive()->isNotExpired()->paginate(10);
        
        return view('admin.home', compact('companies', 'listings', 'publishers'));
    }
    
}
