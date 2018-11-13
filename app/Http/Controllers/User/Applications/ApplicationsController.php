<?php

namespace App\Http\Controllers\User\Applications;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationsController extends Controller
{
    public function show()
    {
        return view('users.employer.application.index');
    }
    
    public function store()
    {
        
    }
}
