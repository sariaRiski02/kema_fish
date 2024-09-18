<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class UserController extends Controller
{
    public function google()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::where('email', $googleUser->email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => Hash::make(uuid_create())
            ]);
        }

        $user->token_activation()->updateOrCreate(
            [
                'token' => rand(10000, 99999),
                'expired_at' => now()->addMinute(5),
                'is_active' => true
            ]
        );

        if ($user->role == 'admin') {
            auth()->login($user);
            return redirect()->route('admin.dashboard');
        }

        auth()->login($user);
        return redirect()->route('home');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
}
