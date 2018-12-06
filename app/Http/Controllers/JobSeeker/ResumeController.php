<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
	public function index()
	{
		return view('jobseekers.resume.index');
	}

    public function create()
    {
    	return view('jobseekers.resume.create');
    }
}
