<?php

namespace App\Livewire\Forms;

use App\Rules\UpdateUser;
use Livewire\Form;

class UpdateForm extends Form
{
    public $name, $phone, $password, $password_confirmation;

    public function rules()
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'numeric', 'unique:contacts,telephone'],
            'password' => ['nullable', 'string', 'min:4', 'confirmed']
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'Nama macam apa ini angka semua..!',
            'name.max' => 'panjang amat namanya..! kek jalan tol',
            'phone.numeric' => 'dimana-mana nomor telephone itu pake angka',
            'phone.unique' => 'wah..! nomor teleponnya sudah ada yang pake..!',
            'password.string' => 'Passwordnya Harus berupa string ya..!',
            'password.min' => 'passwordnya pendek banget..! min:4 lah..',
            'password.confirmed' => 'Waduh..! Passwordnya beda nih..!',
        ];
    }
}
