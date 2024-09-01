<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Validate('required|string|max:255|min:3')]
    public $name;
    #[Validate('required|email|unique:users,email')]
    public $email;
    #[Validate('required|min:4|confirmed')]
    public $password;
    public $password_confirmation;
    #[Validate('required|numeric')]
    public $phone;

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
            'phone.required' => 'Nomor teleponnya? Kasih tau, ya!',
            'phone.numeric' => 'Nomor telepon cuma angka, nggak boleh huruf!',
        ];
    }
}
