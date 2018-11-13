<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function(){
    
});

Route::get('/privacy', 'PrivacyController@privacy');
Route::get('/terms', 'PrivacyController@terms');

Route::get('/jobs', 'Listings\ListingController@jobs');

Route::group(['prefix' => 'views', 'namespace' => 'Listings'], function(){
    Route::get('/', 'ListingViewController@view');
    
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

Route::group(['prefix' => '/login/facebook', 'middleware' => 'guest'], function(){

    Route::get('/', 'FacebookLoginController@login')->name('facebook.login');
    Route::get('/callback', 'FacebookLoginController@handleLogin')->name('facebook.login.callback');

});

Route::get('/profile/picture', 'HomeController@avatar')->name('avatar.show');
Route::delete('/employer/stop/impersonating', 'Admin\ImpersonateController@destroy')->name('stop.impersonating');

/*** Company Image ***/
Route::group(['prefix' => 'employers', 'namespace' => 'User'], function(){
    
   Route::get('/{company}/logo.png', 'ImageController@image')->name('company.cover.logo'); 
   
   Route::get('/{company}/cover.jpg', 'ImageController@cover')->name('company.cover.cover'); 
   
});

Route::get('/employers/{company}', 'CompanyController@show')->name('company.show');

/**** Listing page ***/
Route::group(['prefix' => 'listings', 'namespace' => 'Listings', 'as' => 'listing.'], function(){
   Route::get('/', 'ListingController@index')->name('index');
   
   Route::get('/filter', 'ListingController@filter')->name('search');
   Route::get('/filters', 'ListingController@filters')->name('filter');

   Route::post('/reload', 'ListingController@adsCount');
   
   Route::get('/{listing}', 'ListingController@show')->name('show');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Account'], function(){
    Route::post('/account/avatar', 'AvatarController@store')->name('account.avatar.store');
    Route::patch('/account', 'AccountController@update')->name('account.update');

});

Route::group(['middleware' => ['auth', 'role:publisher'], 'prefix' => 'publisher', 'namespace' => 'Publisher', 'as' => 'publisher.'], function(){
    Route::get('/', 'DashboardController@index')->name('index');
    
    Route::get('/settings/profile', 'DashboardController@profile')->name('profile');
    Route::patch('/settings/profile', 'DashboardController@store');
    
    Route::group(['prefix' => 'promote', 'as' => 'promote.'], function(){
        Route::get('/', 'PostController@index')->name('index');
        
        Route::get('/create', 'PostController@create')->name('create');
        Route::post('/create/{listing}', 'PostController@store')->name('store');
    });
    
    Route::group(['prefix' => 'payment', 'as' => 'withdraw.'], function(){
        Route::get('/', 'PaymentController@transaction')->name('transaction');
        
        Route::get('/request', 'PaymentController@index')->name('index');
        Route::patch('/request', 'PaymentController@store');
        
        Route::get('/pending', 'PaymentController@show')->name('show');
        Route::delete('/pending/{withdraw}', 'PaymentController@destroy')->name('destroy');
    });
    
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'role:admin'], 'as' => 'admin.'], function(){
    
    Route::get('/', 'AdminController@home')->name('index');
    
    Route::group(['as' => 'listing.', 'prefix' => 'listing'], function(){
        Route::get('/', 'ListingController@index')->name('index');
        
        Route::get('/expire', 'ListingController@expire')->name('expire');
    
        Route::get('/unpublish', 'ListingController@unpublish')->name('unpublish');
        
        Route::get('/create', 'CreateListingController@show')->name('create');
        Route::post('/create', 'CreateListingController@store')->name('create.store');
    });
    
    Route::group(['as' => 'employer.', 'prefix' => 'employer'], function(){
        Route::get('/', 'EmployerController@show')->name('index');    
    });
    
    Route::group(['as' => 'publisher.', 'prefix' => 'publisher'], function(){
        Route::get('/', 'PublisherController@show')->name('index');    
    });
    
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

Route::group(['prefix' => 'employer', 'namespace' => 'User', 'middleware' => ['auth', 'role:employer,admin'], 'as' => 'employer.'], function(){
    Route::get('/', 'EmployerController@index')->name('index');
    
    Route::group(['prefix' => 'listing', 'namespace' => 'Listing', 'as' => 'listing.'], function(){
        Route::get('/', 'ListingController@show')->name('published');
        
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
    
    Route::group(['prefix' => 'application', 'namespace' => 'Applications', 'as' => 'application.'], function(){
        Route::get('/', 'ApplicationsController@show')->name('show');
        
        Route::get('/approved', 'ApprovedApplicationsController@show')->name('approved');
        Route::post('/approved', 'ApprovedApplicationsController@store');
        
        Route::get('/rejected', 'RejectedApplicationsController@show')->name('rejected');
        Route::post('/rejected', 'RejectedApplicationsController@store');
    });
    
    Route::group(['prefix' => 'resume', 'namespace' => 'Resume', 'as' => 'resume.'], function(){
        Route::get('/', 'ResumeController@show')->name('browse');
        
        Route::get('saved', 'SavedResumeController@show')->name('saved');
        Route::post('saved', 'SavedResumeController@store');
        
        Route::get('purchased', 'PurchasedResumeController@show')->name('purchased');
        Route::post('purchased', 'PurchasedResumeController@store');
        
        Route::get('search', 'SearchResumeController@show')->name('search');
        Route::post('search', 'SearchResumeController@store');
    });
    
    Route::group(['prefix' => 'payment', 'namespace' => 'Payment', 'as' => 'payment.'], function(){
        Route::get('/', 'PaymentController@show')->name('show');
        
        Route::get('wallet', 'WalletPaymentController@show')->name('wallet');
        
        Route::get('deposit', 'DepositPaymentController@show')->name('deposit');
        Route::post('deposit', 'DepositPaymentController@store');
    });
    
    Route::group(['prefix' => 'profile', 'namespace' => 'Profile', 'as' => 'profile.'], function(){
        Route::get('/', 'ProfileController@show')->name('show');
        Route::post('/', 'ProfileController@store');
        
        Route::get('/company', 'CompanyController@show')->name('company');
        Route::patch('/company', 'CompanyController@store');
        
        Route::get('password', 'PasswordController@show')->name('password');
        Route::post('password', 'PasswordController@store');
        
    });
    
});


/**
 * Listing Api
 * 
 **/

Route::group(['prefix' => 'api/v3', 'namespace' => 'Api'], function(){
    Route::get('listings', 'ListingController@listing');
    
    Route::get('listing/{listing}', 'ListingController@index');
});

