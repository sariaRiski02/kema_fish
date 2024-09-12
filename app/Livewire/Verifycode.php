<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Verifycode extends Component
{
    public $id;
    public $code;
    public function verify()
    {
        $user = User::where('id', $this->id)->first();
        $token = $user->token_activation->first()->token === $this->code;
        if (!$token) {
            return $this->addError('code', 'Kode yang anda masukkan salah');
        }
        $user->token_activation()->update([
            'is_active' => true
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function render()
    {

        $user = User::where('id', $this->id)->first();

        $expired_at = (int) now()->diffInSeconds($user->token_activation->first()->expired_at);

        return view('livewire.verifycode', compact('expired_at'));
    }
}
