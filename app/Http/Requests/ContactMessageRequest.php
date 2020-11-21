<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
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
            'contacter_name'=>'string|required',
            'subject'=>'string|required',
            'email'=>'string|required',
            'phone_number'=>'digits_between:9,13',
            'body'=>'string|required',
        ];
    }
}
