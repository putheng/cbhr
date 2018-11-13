<?php

namespace App\Http\ViewComposers;

use App\Models\Listing;
use Illuminate\View\View;

class NavigationViewComposer
{
    public function compose(View $view)
    {
        $liveListings = request()->user()->listings()->isNotExpired()->isLive()->count();
        
        $notLiveListings = request()->user()->listings()->isNotLive()->count();
        
        $expiredListings = request()->user()->listings()->isExpired()->count();
        
        $view->with(compact('liveListings', 'notLiveListings', 'expiredListings'));
    }
    
}