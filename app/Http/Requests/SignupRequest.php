<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class SignupRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {

        return  [
            'name.required' => 'Namanya Harus diisi ya..!',
            'name.string' => 'Namanya Harus berupa string ya..!',
            'name.max' => 'Namanya maksimal 255 karakter ya..!',
            'name.min' => 'Namanya minimal 4 karakter ya..!',
            'email.required' => 'Email Jangan lupa diisi ya..!',
            'email.string' => 'Email Harus berupa string ya..!',
            'email.email' => 'Email Harus berupa format email ya..!',
            'email.max' => 'Email maksimal 255 karakter ya..!',
            'email.unique' => "Wah..! email sudah ada yang pake!!",
            'password.min' => 'Passwordnya di panjangin dikit dong. min:6 ya..!',
            'password.required' => 'Passwordnya jangan lupa diisi ya..!',
            'password.string' => 'Passwordnya Harus berupa string ya..!',
            'password.confirmed' => 'Waduh..! Passwordnya beda nih..!'
        ];
    }

    protected function failedValidation(Validator $validator)
    {



        $user = User::where('email', $this->input('email'))->first();
        // cek apakah email sudah terdaftar tapi belum aktif
        if ($validator->errors()->first('email') && $user && !$user->tokenActivation->first()->is_active) {
            session([
                'email' => $user->email,
                'tokenActivation' => $user->token
            ]);

            $user->update([
                'name' => $this->input('name'),
                'password' => bcrypt($this->input('password'))
            ]);


            $tokenActivation = $user->tokenActivation->first();

            if ($tokenActivation) {

                $tokenActivation->update([
                    'token' => mt_rand(100000, 999999), // random angka 6 digit
                    'expired' => now()->addMinutes(7),
                    'is_active' => false
                ]);
                throw new ValidationException($validator, redirect()->route('verify'));
            }
        }

        // cek email sudah terdaftar dan aktif
        return redirect()
            ->route('signup')
            ->withInput()
            ->withErrors($validator);
    }
}
