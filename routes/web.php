<?php

Route::get('/privacy', 'PrivacyController@privacy')->name('privacy');
Route::get('/terms', 'PrivacyController@terms')->name('terms');
Route::get('/alllistings.html', 'PrivacyController@alllistings');
Route::get('/allemployer.html', 'PrivacyController@allemployers');

Route::get('/jobs', 'Listings\ListingController@jobs');

Route::group(['prefix' => 'views', 'namespace' => 'Listings'], function(){
    /* listings/show */
    Route::get('/', 'ListingViewController@view');
    
    /* listings/listings */
    Route::get('/listings', 'ListingViewController@index');
});

/*** Home page ***/
Route::group(['as' => 'home.'], function(){

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/partners', 'HomeController@partners')->name('partners');
    Route::get('/employers', 'HomeController@employers')->name('employers');
    Route::get('/policy', 'HomeController@policy')->name('policy');
    
    Route::group(['prefix' => 'services', 'as' => 'services.'], function(){
        Route::get('/', 'HomeController@service')->name('index');
    });
    
    Route::group(['prefix' => 'world', 'as' => 'world.', 'namespace' => 'Home'], function(){
        Route::get('/', 'WorldController@index');
    });
});


Auth::routes();

/* facebook */
Route::group(['prefix' => '/login/facebook', 'middleware' => 'guest', 'as' => 'facebook.'], function(){
    Route::get('/', 'FacebookLoginController@login')->name('login');
    Route::get('/callback', 'FacebookLoginController@handleLogin')->name('login.callback');
});

Route::get('/profile/picture', 'HomeController@avatar')->name('avatar.show');
Route::delete('/employer/stop/impersonating', 'Admin\ImpersonateController@destroy')->name('stop.impersonating');

/*** Company Image ***/
Route::group(['prefix' => 'employers', 'namespace' => 'User'], function(){
   Route::get('/{company}/logo.png', 'ImageController@image')->name('company.cover.logo'); 
   Route::get('/{company}/cover.jpg', 'ImageController@cover')->name('company.cover.cover'); 
});

Route::get('/employers/{company}', 'CompanyController@show')->name('company.show');

/**** Listing section ***/
Route::group(['prefix' => 'listings', 'namespace' => 'Listings', 'as' => 'listing.'], function(){
   Route::get('/', 'ListingController@index')->name('index');

   /* listings/filter */
   Route::get('/filter', 'ListingController@filter')->name('search');
   Route::get('/filters', 'ListingController@filters')->name('filter');

   /* listings/reload */
   Route::post('/reload', 'ListingController@adsCount');

   /* listings/show */
   Route::get('/{listing}', 'ListingController@show')->name('show');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Account'], function(){
    Route::post('/account/company/logo', 'AvatarController@store')->name('account.avatar.store');
    Route::post('/account/user/avatar', 'AvatarController@avatar')->name('account.store.avatar');
    Route::patch('/account', 'AccountController@update')->name('account.update');

});

/* publisher  */
Route::group(['middleware' => ['auth', 'role:publisher'], 'prefix' => 'publisher', 'namespace' => 'Publisher', 'as' => 'publisher.'], function(){
    Route::get('/', 'DashboardController@index')->name('index');
    Route::get('/settings/profile', 'DashboardController@profile')->name('profile');
    Route::patch('/settings/profile', 'DashboardController@store');
    
    /* publisher/promote */
    Route::group(['prefix' => 'promote', 'as' => 'promote.'], function(){
        Route::get('/', 'PostController@index')->name('index');
        Route::get('/create', 'PostController@create')->name('create');
        Route::post('/create/{listing}', 'PostController@store')->name('store');
    });
    
    /* publisher/payment */
    Route::group(['prefix' => 'payment', 'as' => 'withdraw.'], function(){
        Route::get('/', 'PaymentController@transaction')->name('transaction');
        Route::get('/request', 'PaymentController@index')->name('index');
        Route::patch('/request', 'PaymentController@store');
        Route::get('/pending', 'PaymentController@show')->name('show');
        Route::delete('/pending/{withdraw}', 'PaymentController@destroy')->name('destroy');
    });
    
});


/* Admin section*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'role:admin'], 'as' => 'admin.'], function(){
    
    Route::get('/', 'AdminController@home')->name('index');
    
    /* admin/listing */
    Route::group(['as' => 'listing.', 'prefix' => 'listing'], function(){
        Route::get('/', 'ListingController@index')->name('index');
        Route::get('/expire', 'ListingController@expire')->name('expire');
        Route::get('/unpublish', 'ListingController@unpublish')->name('unpublish');
        Route::get('/create', 'CreateListingController@show')->name('create');
        Route::post('/create', 'CreateListingController@store')->name('create.store');
    });
    
    /* admin/employer  */
    Route::group(['as' => 'employer.', 'prefix' => 'employer'], function(){
        Route::get('/', 'EmployerController@show')->name('index');
        /* admin/employer/payment */
        Route::get('/payment', 'PaymentController@index')->name('payment');   
    });

    /* admin/payment */
    Route::group(['as' => 'payment.', 'prefix' => 'payment'], function(){

        /* admin/payment/deposit */
        Route::group(['prefix' => 'deposit', 'as' => 'deposit.'], function(){
            Route::post('/{deposit}/approve', 'DepositController@approve')->name('approve');
            Route::post('/{deposit}/cancel', 'DepositController@cancel')->name('cancel');
        });
    });
    
    /* admin/publisher */
    Route::group(['as' => 'publisher.', 'prefix' => 'publisher'], function(){
        Route::get('/', 'PublisherController@show')->name('index');

        /* admin/publisher/withdraw */
        Route::get('/withdraw', 'WithdrawController@index')->name('withdraw');
        Route::post('/withdraw/{withdraw}/approve', 'WithdrawController@approve')->name('withdraw.approve');
        Route::post('/withdraw/{withdraw}/reject', 'WithdrawController@cancel')->name('withdraw.cancel');
    });
    
    /* admin/accoutn */
    Route::group(['as' => 'account.', 'prefix' => 'account'], function(){
        Route::get('/password', 'PasswordController@index')->name('password');    
        Route::patch('/password', 'PasswordController@store');
    });
    
    Route::group(['as' => 'impersonate.', 'prefix' => 'impersonate'], function(){
        Route::get('/', 'ImpersonateController@index')->name('index');    
        Route::post('/', 'ImpersonateController@store');
    });
    
    Route::group(['prefix' => 'roles'], function(){
        Route::get('refresh/7777', 'ImpersonateController@updateRoles');
    });
});

/* Employer section */
Route::group(['prefix' => 'employer', 'namespace' => 'User', 'middleware' => ['auth', 'role:employer,admin'], 'as' => 'employer.'], function(){
    Route::get('/', 'EmployerController@index')->name('index');
    
    /* employer/listing */
    Route::group(['prefix' => 'listing', 'namespace' => 'Listing', 'as' => 'listing.'], function(){
        Route::get('/', 'ListingController@show')->name('published');
        
        /* employer/listing/create */
        Route::get('create', 'CreateListingController@show')->name('create');
        Route::post('create', 'CreateListingController@store');
        
        Route::get('/{listing}/edit', 'ListingController@edit')->name('edit');
        Route::post('/{listing}/edit', 'ListingController@store');
        
        Route::delete('/{listing}/destroy', 'ListingController@destroy')->name('destroy');
        
        Route::get('/{listing}/payment', 'ListingPaymentController@show')->name('payment');
        Route::post('/{listing}/payment', 'ListingPaymentController@store');
        
        Route::get('unpublish', 'UnpublishedListingController@show')->name('unpublished');
        Route::post('unpublish', 'UnpublishedListingController@store');
        
        Route::get('expired', 'ExpiredListingController@show')->name('expired');
        Route::post('expired', 'ExpiredListingController@store');
        
    });
    
    /* employer/application */
    Route::group(['prefix' => 'application', 'namespace' => 'Applications', 'as' => 'application.'], function(){
        Route::get('/', 'ApplicationsController@show')->name('show');
        
        Route::get('/approved', 'ApprovedApplicationsController@show')->name('approved');
        Route::post('/approved', 'ApprovedApplicationsController@store');
        
        Route::get('/rejected', 'RejectedApplicationsController@show')->name('rejected');
        Route::post('/rejected', 'RejectedApplicationsController@store');
    });
    
    /* employer/resume */
    Route::group(['prefix' => 'resume', 'namespace' => 'Resume', 'as' => 'resume.'], function(){
        Route::get('/', 'ResumeController@show')->name('browse');
        
        Route::get('saved', 'SavedResumeController@show')->name('saved');
        Route::post('saved', 'SavedResumeController@store');
        
        Route::get('purchased', 'PurchasedResumeController@show')->name('purchased');
        Route::post('purchased', 'PurchasedResumeController@store');
        
        Route::get('search', 'SearchResumeController@show')->name('search');
        Route::post('search', 'SearchResumeController@store');
    });
    
    /* employer/payment */
    Route::group(['prefix' => 'payment', 'namespace' => 'Payment', 'as' => 'payment.'], function(){
        Route::get('/', 'PaymentController@show')->name('show');
        
        Route::get('wallet', 'WalletPaymentController@show')->name('wallet');
        
        Route::get('deposit', 'DepositPaymentController@show')->name('deposit');
        Route::post('deposit', 'DepositPaymentController@store');
    });
    
    /* employer/profile */
    Route::group(['prefix' => 'profile', 'namespace' => 'Profile', 'as' => 'profile.'], function(){
        Route::get('/', 'ProfileController@show')->name('show');
        Route::post('/', 'ProfileController@store');

        /* employer/profile/company */
        Route::get('/company', 'CompanyController@show')->name('company');
        Route::patch('/company', 'CompanyController@store');
        
        Route::get('password', 'PasswordController@show')->name('password');
        Route::post('password', 'PasswordController@store');
        
    });
    
});

/* seeker */
Route::group(['prefix' => 'jobseeker', 'namespace' => 'JobSeeker', 'as' => 'seeker.'], function(){

    Route::get('/register', 'SeekerRegisterController@index')->name('register');

});

Route::group(['prefix' => 'jobseeker', 'namespace' => 'JobSeeker', 'as' => 'seeker.', 'middleware' => ['auth', 'role:jobseeker,admin']], function(){

    /* seeker/index */
    Route::get('/', 'JobSeekerController@index')->name('index');


    /* seeker/listings */
    Route::group(['prefix' => 'listings', 'as' => 'listings.'], function(){
        Route::get('/', 'ListingsController@index')->name('index');

        /* seeker/listings/search */
        Route::get('/search', 'ListingsController@search')->name('search');

        /* seeker/listings/alert */
        Route::get('/alert', 'ListingAlertController@index')->name('alert');
        Route::get('/alert/add', 'ListingAlertController@create')->name('alert.create');

        Route::get('/application', 'ListingsController@application')->name('application');    
    });

    /* seeker/messages */
    Route::group(['prefix' => 'messages', 'as' => 'messages.'], function(){
        Route::get('/', 'MessagesController@index')->name('index');
        Route::get('/reply', 'MessagesController@reply')->name('reply');
    });

    /* seeker/profile */
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function(){
        Route::get('/edit', 'ProfileController@edit')->name('edit');
        Route::get('password', 'PasswordController@index')->name('password');
        Route::get('preferences', 'JobSeekerController@preferences')->name('preferences');
        Route::get('statistics', 'JobSeekerController@statistics')->name('statistics');
    });

    /* seeker/resume */
    Route::group(['prefix' => 'resume', 'as' => 'resume.'], function(){
        Route::get('/', 'ResumeController@index')->name('index');
        Route::get('/create', 'ResumeController@create')->name('create');
    });

});

/**
 * Listing Api
 * 
 **/

Route::group(['prefix' => 'api/v3', 'namespace' => 'Api'], function(){
    Route::get('listings', 'ListingController@listing');
    Route::get('listing/{listing}', 'ListingController@index');

    Route::get('json', 'ListingController@json');
});

