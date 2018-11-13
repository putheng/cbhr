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
            'amount'    => 'required|numeric|min:10|max:1500',
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
            'processor.required' => 'Please select a processor.',
            'transaction.exists' => 'Transaction code already exists.',
        ];
    }
}
