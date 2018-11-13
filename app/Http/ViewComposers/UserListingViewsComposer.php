<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class UserListingViewsComposer
{
    public function compose(View $view)
    {
        $listingViewsSum = auth()->user()->listings()
                            ->selectRaw('SUM(views) as total')
                            ->first()->total;
        
        $view->with(compact('listingViewsSum'));
    }
    
}