<?php

namespace App\Http\Requests\Publisher;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawFormRequest extends FormRequest
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
            'phone' => 'required|digits_between:9,10|numeric',
            'processor' => 'required',
            'amount' => 'required|numeric|max:'. auth()->user()->usd
        ];
    }
    
    public function messages()
    {
        return [
            'phone.digits_between' => 'Invalid phone number',
            'phone.numeric' => 'Invalid phone number'
        ];
    }
}
