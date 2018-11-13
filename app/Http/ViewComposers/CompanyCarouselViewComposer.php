<?php

namespace App\Http\ViewComposers;

use App\Models\Company;
use Illuminate\View\View;

class CompanyCarouselViewComposer
{
    
    public function compose(View $view)
    {
        $companyCarousel = Company::getCarousel();
        
        $view->with(compact('companyCarousel'));
    }
    
}