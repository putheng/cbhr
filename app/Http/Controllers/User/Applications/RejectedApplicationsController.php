<?php

namespace App\Http\Controllers\User\Applications;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RejectedApplicationsController extends Controller
{
    public function show()
    {
        return view('users.employer.application.rejected');
    }
    
    public function store()
    {
        
    }
}
