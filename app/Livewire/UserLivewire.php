<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Http\Requests\SignupRequest;

class UserLivewire extends Component
{

    public function signup(SignupRequest $request)
    {
        $data = $request->validated();
        $user = new User();
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();
        return redirect()->route('home');
    }

    public function render()
    {
        return view('components.signup');
    }
}
