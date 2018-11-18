<?php

namespace App\Http\Controllers\Admin;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Filters\Listing\ListingFilters;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $listings = Listing::with('company', 'category')
            ->isNotExpired()
            ->isLive()
            ->latestFirst()
            ->filter($request)
            ->paginate(20);
        
        return view('admin.listings.index', compact('listings'));
    }
    
    public function expire(Request $request)
    {
        $listings = Listing::with('company', 'category')
            ->isExpired()
            ->latestFirst()
            ->filter($request)
            ->paginate(20);
        
        return view('admin.listings.expire', compact('listings'));
    }
    
    public function unpublish(Request $request)
    {
        $listings = Listing::with('company', 'category')
            ->isNotLive()
            ->latestFirst()
            ->filter($request)
            ->paginate(20);
        
        return view('admin.listings.unpublish', compact('listings'));
    }
}
