<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Listing;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function privacy()
    {
    	return response('privacy page', 200);
    }

    public function terms()
    {
    	return response('terms page', 200);
    }

    public function alllistings()
    {
    	$listings = Listing::orderBy('id', 'desc')->take(500)->get();
    	foreach ($listings as $key => $listing) {
    		echo route('listing.show', $listing) ." \n";
    	}
    }

    public function allemployers()
    {
    	$companies = Company::orderBy('id', 'desc')->take(500)->get();
    	foreach ($companies as $key => $company) {
    		echo route('company.show', $company) ." \n";
    	}
    }
}
