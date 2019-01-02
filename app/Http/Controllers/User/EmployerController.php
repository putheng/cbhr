<?php

namespace App\Http\Controllers\User;

use App\Models\{Listing, Company};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    public function index(Request $request)
    {
        $listings = $request->user()
        		->listings()
        		->with(['area', 'category'])
        		->latestFirst()->paginate(10);
        
        $company = $request->user()->company;
        
        return view('users.employer.index', compact('listings', 'company'));
    }
}
