<?php

namespace App\Http\Controllers\User\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SavedResumeController extends Controller
{
    public function show()
    {
        return view('users.employer.resume.save');
    }
    
    public function store()
    {
        
    }
}
