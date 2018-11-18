<?php

namespace App\Http\ViewComposers\Admin;

use App\Models\{Company, Listing, Role};
use Illuminate\View\View;

class CountUser{
	
    public function compose(View $view)
    {

        $publishers = Role::GetUser(3)->count();
        $companies = Company::with('user')->latestFirst()->paginate(10);
        $listings = Listing::latestFirst()->isLive()->isNotExpired()->paginate(10);
        
        $view->with(compact('publishers', 'companies', 'listings'));
    }

}