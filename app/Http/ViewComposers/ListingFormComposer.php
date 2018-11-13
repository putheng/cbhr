<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\{
    Term,
    Level,
    Education,
    Salary,
    Experience,
    Category,
    Area,
    Gender,
    Age
};

class ListingFormComposer
{
    public function compose(View $view)
    {
        $terms = Term::get();
        $levels = Level::get();
        $education = Education::get();
        $salaries = Salary::get();
        $experiences = Experience::get();
        $categories = Category::get()->toTree();
        $areas = Area::get()->toTree();
        $gender = Gender::get();
        $age = Age::get();
        
        return $view->with(compact(
            'terms',
            'levels',
            'education',
            'salaries',
            'experiences',
            'categories',
            'areas',
            'gender',
            'age'
        ));
    }
    
}