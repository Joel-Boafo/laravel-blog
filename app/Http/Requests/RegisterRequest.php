<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'username' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['min:8', 'required', 'confirmed'],
        ];
    }
}
