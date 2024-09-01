<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Livewire\Forms\RegisterForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Signup extends Component
{


    public RegisterForm $form;

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'password' => $this->form->password
        ]);

        Auth::login($user);
        return response()->redirectToRoute(route: 'home', status: 200);
    }

    public function render()
    {
        return view('livewire.signup');
    }
}
