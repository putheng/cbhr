<?php

namespace App\Http\Controllers\User\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    public function show()
    {
        return view('users.employer.resume.index');
    }
    
    public function store()
    {
        
    }
}
