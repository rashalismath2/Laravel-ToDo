<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateLogin extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'=>'required|email|exists:admins,email',
            'password'=>'required'
        ];
    }

    public function messages(){
        return [
            'email.required'=>'Email Field Couldnt be empty',
            'email.email'=>'This should be an email',
            'email.exists'=>'Invalid Email',
            'password.required'=>'Password Field Couldnt be empty',
        ];
    }
}
