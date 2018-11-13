<?php

namespace App\Http\Controllers\User\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchResumeController extends Controller
{
    public function show()
    {
        return view('users.employer.resume.search');
    }
    
    public function store()
    {
        
    }
}
