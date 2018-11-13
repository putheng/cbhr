<?php

namespace App\Http\Controllers\User\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchasedResumeController extends Controller
{
    public function show()
    {
        return view('users.employer.resume.purchase');
    }
    
    public function store()
    {
        
    }
}
