<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\SigninForm;
use Illuminate\Support\Facades\Auth;

class Signin extends Component
{

    public SigninForm $form;


    public function signin()
    {
        $this->validate();
        $auth = Auth::attempt([
            'email' => $this->form->email,
            'password' => $this->form->password
        ]);
        if (!$auth) {
            session()->flash('error', 'Gagal login, Periksa kembali email dan password anda.');
        } else {

            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.signin');
    }
}
