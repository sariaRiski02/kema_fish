<?php

namespace App\Livewire\Forms;

use App\Rules\UniqueEmailRule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    public $name, $email, $password, $password_confirmation, $phone;
    public function rules()
    {
        return [
            'password' => 'required|min:4|confirmed',
            'password_confirmation' => 'required|min:4',
            'name' => 'required|string|max:255|min:3',
            'email' => ['required', 'email', new UniqueEmailRule()],
            'phone' => 'required|numeric|unique:contacts,telephone',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama? Jangan lupa, dong!',
            'name.string' => 'Nama kok aneh? Harus teks, ya!',
            'name.max' => 'Nama kamu panjang banget, singkatin dikit!',
            'name.min' => 'Nama kok kurang dari 3 huruf, Tambahin, dong!',
            'email.required' => 'Email mana nih? Kasih tau dong!',
            'email.email' => 'Emailnya salah format, coba cek lagi!',
            'email.unique' => 'Email ini udah dipake. Coba yang lain!',
            'password.required' => 'Password wajib ada, biar aman!',
            'password.min' => 'Passwordnya terlalu pendek, tambah panjangnya!',
            'password.confirmed' => 'Passwordnya nggak cocok, coba lagi!',
            'password_confirmation.required' => 'Konfirmasi password wajib ada!',
            'password_confirmation.confirmed' => 'Passwordnya nggak cocok, coba lagi!',
            'phone.required' => 'Nomor teleponnya? Kasih tau, ya!',
            'phone.numeric' => 'Nomor telepon cuma angka, nggak boleh huruf!',
            'phone.unique' => 'Nomor telepon ini udah dipake. Coba yang lain!',
        ];
    }
}
