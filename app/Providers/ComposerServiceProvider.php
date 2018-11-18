<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\{
    ListingFormComposer,
    HomeCategoryComposer,
    CompanyCarouselViewComposer,
    NavigationViewComposer,
    FeaturedJobs,
    UserListingViewsComposer
};

use App\Http\ViewComposers\Admin\{CountUser};

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer([
            'users.employer.listing.partials.form',
            'users.admin.listings.partials.form',
            'home.partials.filter'
        ], ListingFormComposer::class);
        
        View::composer('users.employer.index', UserListingViewsComposer::class);
        
        View::composer('home.partials.homeCategory', HomeCategoryComposer::class);
        
        View::composer('layouts.partials.emp.header', NavigationViewComposer::class);
        
        View::composer('home.partials.companyCarousel', CompanyCarouselViewComposer::class);
        
        View::composer(
            [
                'home.partials.rightSideBar',
                'home.partials.carousel'
            ],
            FeaturedJobs::class
        );

        View::composer('admin.home', CountUser::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
