<?php

namespace App\Livewire\Forms;

use App\Rules\UpdateUser;
use Livewire\Form;

class UpdateForm extends Form
{
    public $name, $phone, $password, $password_confirmation, $current_password;

    public function rules()
    {
        return [
            'name' => ['string', 'max:255'],
            'phone' => ['numeric', 'unique:contacts,telephone'],
            'password' => ['string', 'min:4', 'confirmed'],
            'current_password' => ['required', 'string', new UpdateUser]
        ];
    }

    public function message()
    {
        return [
            'name.string' => 'Nama macam apa ini angka semua..!',
            'name.max' => 'panjang amat namanya..! kek jalan tol',
            'phone.numeric' => 'dimana-mana nomor telephone itu pake angka',
            'phone.unique' => 'wah..! nomor teleponnya sudah ada yang pake..!',
            'password.string' => 'Passwordnya Harus berupa string ya..!',
            'password.min' => 'passwordnya pendek banget..! min:4 lah..',
            'password.confirmed' => 'Waduh..! Passwordnya beda nih..!',
            'current_password.required' => 'Passwordnya jangan lupa diisi ya..!',
            'current_password.string' => 'Passwordnya Harus berupa string ya..!'
        ];
    }
}
