<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyformRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cnm'=>'required|max:30',
            'email'=>'required|email',
            'logo'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
            'website'=>'required|max:100',
        ];
    }

    public function messages()
    {
       return [
        'cnm.required'=>'Company Name is also Required !',
        'email.required'=>'Email Id is also Required !',
        'logo.required'=>'Company logo is also Required !',
        'website.required'=>'Website is also Required !',


       ];
    }
}
