<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingAlertController extends Controller
{
    public function index()
    {
    	return view('jobseekers.alert.show');
    }

    public function create()
    {
    	return view('jobseekers.alert.create');
    }
}
