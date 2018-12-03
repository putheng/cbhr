<?php

namespace App\Http\Requests;

use App\Models\Processor;
use Illuminate\Validation\Rule;
use App\Rules\DepositTransactionExists;
use Illuminate\Foundation\Http\FormRequest;

class DepositFormRequest extends FormRequest
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
            'processor' => 'required|exists:processors,id',
            'amount'    => 'required|numeric|min:10|max:500',
            'disclaimer' => 'required',
            'terms' => 'required',
            'transaction' => [
                'required',
                'numeric',
                new DepositTransactionExists(),
            ],
            
        ];
    }
    
    public function messages()
    {
        return [
            'processor.required' => 'You must choose a payment method.',
            'transaction.exists' => 'Transaction code already exists.',
            'disclaimer.required' => 'You must agree to the disclaimer.',
            'terms.required' => 'You must agree to the terms and conditions.',
        ];
    }
}
