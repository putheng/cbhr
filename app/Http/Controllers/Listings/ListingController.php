<?php

namespace App\Http\Controllers\Listings;

use App\Models\{Listing, Post};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Encryption\DecryptException;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::with(['area', 'company', 'term', 'salary', 'category'])
                    ->isLive()->isNotExpired()->latestFirst()->paginate(15);
        
        return view('home.listings.index', compact('listings'));
    }
    
    public function show(Request $request, Listing $listing)
    {
        $listing->increment('views');
        return view('home.listing', compact('listing'));
    }

    public function adsCount(Request $request)
    {
        try{
            $explode = explode('-', decrypt($request->token));

            $post = Post::where([
                'user_id' => $explode[1],
                'listing_id' => $explode[0]
            ])->first();

            if((bool)$post){
                $post->increment('views');
            }
        }catch(DecryptException $e){
            // dd($e->getMessage());
        }
    }
    
    public function filter(Request $request)
    {
        $listings = Listing::with('area', 'company', 'term', 'salary', 'category')
        ->isNotExpired()->isLive()->filter($request)->latestFirst()->paginate(15);
        
        return view('home.listings.search', compact('listings'));
    }
    
    public function filters(Request $request)
    {
        return redirect()->route('listing.search', array_filter($request->all()));
    }
    
    public function jobs()
    {
        $listing = Listing::inRandomOrder()->isLive()->isNotExpired()->take(1)->first();
        
        $listing->increment('views');
        return view('home.listing', compact('listing'));
    }
}
