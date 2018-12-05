<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSeekerController extends Controller
{
    public function index()
    {
    	return view('jobseekers.home');
    }
}
