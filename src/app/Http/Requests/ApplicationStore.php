<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ApplicationStore extends FormRequest
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
     $status = ['new', 'in_progress', 'approved', 'rejected' ];
        return [
            "dealer_name" => 'required',
            "bank_id" => 'integer|min:1|max:4',
            "dealer_employee" => 'required'  ,
            "credit_sum" => 'digits_between:1,10',
            "credit_deadline" => 'required|date|after:today',
            "interest_rate" =>  'integer|min:12|max:100',
            "credit_target" => 'required',
            "status" =>  Rule::in($status),
            ];
    }
    public function messages(): array
    {
        return [
            'dealer_name.required' => 'A title is required',

        ];
    }

//    public function failedValidation(Validator $validator){
//        return [
//            'dealer_name.required' => 'A title is required',
//
//        ];
//    }

}
