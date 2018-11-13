<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(Company $company)
    {
       return view('home.employer.index', compact('company'));
    }
}
