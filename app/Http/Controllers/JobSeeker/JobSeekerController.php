<?php

namespace App\Http\Controllers\JobSeeker;

use App\Models\{Category, Area, Experience, Term};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSeekerController extends Controller
{
    public function index()
    {
    	return view('jobseekers.home');
    }

    public function preferences()
    {
    	$categories = Category::orderBy('name', 'asc')->whereNUll('parent_id')->get();
    	$areas = Area::orderBy('name', 'asc')->whereNUll('parent_id')->get();
    	$experiences = Experience::get();
    	$terms = Term::get();

    	return view('jobseekers.profile.preferences', compact('categories', 'areas', 'experiences', 'terms'));
    }

    public function statistics()
    {
    	return view('jobseekers.profile.statistics');
    }
}
