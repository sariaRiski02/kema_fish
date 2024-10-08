<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Mail\SignupVerify;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Livewire\Forms\RegisterForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Signup extends Component
{


    public RegisterForm $form;

    public function register()
    {

        $this->validate();

        $user = User::updateOrCreate(
            ['email' => $this->form->email],
            [
                'name' => $this->form->name,
                'password' => Hash::make($this->form->password)
            ]
        );

        $user->contact()->create([
            'telephone' => $this->form->phone
        ]);

        if ($user->token_activation->first()) {
            $user->token_activation()->delete();
        }

        $data_token = $user->token_activation()->updateOrCreate(
            ['id' => $user->id],
            [
                'token' => rand(10000, 99999),
                'expired_at' => now()->addMinute(5)
            ]
        );
        Mail::to($user->email)->send(new SignupVerify(
            $user->name,
            $data_token->token,
            $user->email

        ));

        return redirect()->route('verifycode', ['id' => $user->id]);
    }

    #[Layout('layouts.appStart')]
    public function render()
    {
        return view('livewire.signup');
    }
}
