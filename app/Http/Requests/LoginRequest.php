<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ];
    }


    public function failedValidation(Validator $validation)
    {
        return redirect()
            ->route('signin')
            ->withInput()
            ->withErrors($validation);
    }

    public function message()
    {
        return [
            "email.required" => 'Email Harus diisi dong!!',
            "email.email" => 'Waduh..! bukan format email',
            "password.required" => 'Password Harus diisi dong!!',
            "password.min" => 'Wah..! Password minimal 6 char'
        ];
    }
}
