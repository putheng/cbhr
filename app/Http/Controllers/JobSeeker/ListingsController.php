<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingsController extends Controller
{
	public function index()
	{

	}

    public function search(Request $request)
    {
    	return view('jobseekers.jobs.search');
    }
}
