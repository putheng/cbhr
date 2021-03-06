<?php

namespace App\Http\Controllers\Listings;

use App\Models\{Listing, Post, PostView};
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
        $urgent = $request->header('User-Agent');
        $explode = explode('-', decrypt($request->token));

        try{

            if(strpos($urgent, 'FBLC') !== false 
                && auth()->guest() 
                || auth()->id() != $explode[1]){

                $post = Post::where([
                    'user_id' => $explode[1],
                    'listing_id' => $explode[0]
                ])->first();

                if((bool)$post && checkLoadToken($request->loadToken)){
                    $post->increment('views');
                }else{
                    $post = new Post;
                    $post->user_id = $explode[1];
                    $post->listing_id = $explode[0];
                    $post->postid = $request->token;
                    $post->save();
                }


                $view = new PostView;
                $view->agent = $urgent;
                $view->post()->associate($post);
                $view->save();

                $post->user()->increment('usd', $post->ecmp);
            
                return 'ok';
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
