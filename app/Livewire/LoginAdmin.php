<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class LoginAdmin extends Component
{

    public $email, $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $login = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        if ($login) {
            return redirect()->route('admin.dashboard');
        }
        $this->reset();
        session()->flash('error', 'Email or Password is incorrect');
    }

    #[Layout('layouts.appAdmin')]
    public function render()
    {
        return view('livewire.login-admin');
    }
}
