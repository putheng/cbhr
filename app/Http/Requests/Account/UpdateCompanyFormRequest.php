<?php

namespace App\Http\Requests\Account;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'avatar_id' => 'nullable|'.Rule::exists('images', 'id')->where(function ($q){
                $q->where('user_id', auth()->id());
            }),
            'company' => 'required|string|max:255',
            'industry' => ['required', Rule::exists('industries', 'id')],
            'type' => ['required', Rule::exists('company_types', 'id')],
            'employee' => ['required', Rule::exists('employee_types', 'id')],
            'phone' => 'required',
            'address' => 'required|max:500|min:5',
            'description' => 'required|string|max:1000',
        ];
    }
}
