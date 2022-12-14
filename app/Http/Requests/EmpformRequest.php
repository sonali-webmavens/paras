<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class EmpformRequest extends FormRequest
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

            'fname'=>'required',
            'lname'=>'required',
            'company'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:10|max:10'

        ];
    }

    public function messages()
    {
       return [
        'fname.required'=>'First Name is also Required !',
        'lname.required'=>'Last Name is also Required !',
        'company.required'=>'Company Name is also Required !',
        'email.required'=>'Email Id is also Required !',
        'phone.required'=>'Mobial Number is also Required !'

       ];
    }
}

