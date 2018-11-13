<?php

namespace App\Http\Controllers\User\Listing;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpiredListingController extends Controller
{
    public function show(Request $request)
    {
        $listings = $request->user()->listings()->with(['area'])->isExpired()->latestFirst()->paginate(15);
        
        return view('users.employer.listing.expired', compact('listings'));
    }
    
    public function store()
    {
        
    }
}
