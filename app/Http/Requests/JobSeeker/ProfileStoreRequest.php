<?php

namespace App\Http\Requests\JobSeeker;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'address' => 'required|string|max:300',
            'phone' => 'required|max:13|min:8',
            'birthday' => 'required',
            'gender' => 'required|exists:genders,id',
        ];
    }
}
