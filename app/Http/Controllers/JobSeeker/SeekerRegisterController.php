<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeekerRegisterController extends Controller
{
    public function index()
    {
    	return view('jobseekers.auth.register');
    }
}
