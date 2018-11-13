<?php

namespace App\Http\Requests\Listing;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ListingFormRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description'   => 'required|max:4000|min:10',
            'requirement'   => 'required|max:4000|min:10',
            'start'         => 'required',
            'closing'       => 'required',
            'category' => [
                'required',
                Rule::exists('categories', 'id')
            ],
            'location' => [
                'required',
                Rule::exists('areas', 'id')
            ],
            'age' => [
                'required',
                Rule::exists('ages', 'id')
            ],
            'gender' => [
                'required',
                Rule::exists('genders', 'id')
            ],
            'term' => [
                'required',
                Rule::exists('terms', 'id')
            ],
            'education' => [
                'required',
                Rule::exists('education', 'id')
            ],
            'salary' => [
                'required',
                Rule::exists('salaries', 'id')
            ],
            'level' => [
                'required',
                Rule::exists('levels', 'id')
            ],
            'experience' => [
                'required',
                Rule::exists('experiences', 'id')
            ]
        ];
    }
}
