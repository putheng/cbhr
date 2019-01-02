<?php

namespace App\Http\Controllers\Publisher;

use Auth;
use App\Models\{Listing, Post};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{   
    public function index(Request $request)
    {
        $posts =$request->user()->post()->with('listing')->latestFirst()->paginate(15);
        $posts->setPath('');
        
        return view('publisher.post.index', compact('posts'));
    }
    
    public function create(Request $request)
    {
        $posts = $request->user()->post()->pluck('listing_id')->all();
        
        $listings = listing::with(['area', 'company', 'salary'])->notPosted($posts)
        ->isNotExpired()->isLive()
        ->latestFirst()->paginate(10);
        
        $listings->setPath('');
        
        return view('publisher.post.create', compact('listings'));
    }
    
    public function store(Request $request, Listing $listing)
    {
        $check = $request->user()->post()->listingExists($listing->id)->first();
        
        if($check !== null){
            $check->increment('touch');
            
        }else{
            $post = new Post;
            $post->postid = encrypt($listing->id .'-'. auth()->id());
            $post->user()->associate($request->user());
            $post->listing()->associate($listing);
            
            $post->save();
        }

        return back()->withSuccess('Listing posted');
    }

}
