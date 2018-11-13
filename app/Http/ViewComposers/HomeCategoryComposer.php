<?php

namespace App\Http\ViewComposers;

use App\Models\{Category, Salary, Area, Industry, Listing};
use Illuminate\View\View;

class HomeCategoryComposer
{
    
    public function compose(View $view)
    {
        $categories = Category::with(['listings' => function($query){
            $query->isLive();
        }])->get()->toTree();
        
        $areas = Area::get()->toTree();
        $industries = Industry::get();
        $salaries = Salary::get();
        
        $listings = Listing::with(['area', 'company', 'term', 'salary', 'category'])
                    ->isLive()->isNotExpired();
        
        $view->with(compact('categories', 'areas', 'industries', 'salaries', 'listings'));
    }
}