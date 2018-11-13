<?php

namespace App\Http\Controllers\User\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\UpdateCompanyFormRequest;

class CompanyController extends Controller
{
    public function show(Request $request)
    {
        return view('users.employer.profile.edit')->with(['user' => $request->user()]);
    }
    
    public function store(UpdateCompanyFormRequest $request)
    {
        $vaule = [
            'name' => $request->company,
            'industry_id' => $request->industry,
            'type_id' => $request->type,
            'employee_id' => $request->employee,
            'address' => $request->address,
            'website' => $request->website,
            'phone' => $request->phone,
            'description' => $request->description,
        ];
        
        if(!empty($request->avatar_id)){
            $vaule = array_merge([
                'logo_id' => $request->avatar_id,
            ], $vaule);
        }
        
        $request->user()->company()->update($vaule);
        
        return back()->withSuccess('Company profile updated.');
    }
}
