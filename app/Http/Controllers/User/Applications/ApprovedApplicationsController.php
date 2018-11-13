<?php

namespace App\Http\Controllers\User\Applications;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprovedApplicationsController extends Controller
{
    public function show()
    {
        return view('users.employer.application.approved');
    }
    
    public function store()
    {
        
    }
}
