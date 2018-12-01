<?php 

namespace App\Http\ViewComposers;

use App\Models\Listing;
use Facebook\Facebook;
use Illuminate\View\View;

class FeaturedJobs
{
    public function compose(View $view)
    {
        $listings = Listing::with('company')
        		->isLive()
        		->take(5)
        		->isNotExpired()
        		->inRandomOrder()
        		->get();
                    
        $view->with(compact('listings'));
    }
}