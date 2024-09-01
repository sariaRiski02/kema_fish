<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class SigninForm extends Form
{

    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:4|')]
    public $password;

    public function messages()
    {
        return [

            'email.required' => 'Email mana nih? Kasih tau dong!',
            'password.required' => 'Password wajib ada, biar aman!',
        ];
    }
}
