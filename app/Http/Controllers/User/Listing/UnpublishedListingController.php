<?php

namespace App\Http\Controllers\User\Listing;

use App\Models\{Listing};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnpublishedListingController extends Controller
{
    public function show(Request $request)
    {
        $listings = $request->user()->listings()->with(['area'])->isNotLive()->latestFirst()->paginate(10);
        return view('users.employer.listing.unpublished', compact('listings'));
    }
    
    public function edit(Listing $listing)
    {
        return view('users.employer.listing.edit', compact('listing'));
    }
}
