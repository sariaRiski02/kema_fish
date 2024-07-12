<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SignupVerify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function signupForm()
    {
        return view('pages.signup');
    }

    public function signupPost(SignupRequest $request)
    {

        $data = $request->validated();

        $user = new User();
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->name = $data['name'];
        $user->save();

        $newUser = User::where('email', $data['email'])->first();

        $Token_verify = $newUser->tokenActivation()->create([
            'token' => mt_rand(100000, 999999), // random angka 6 digit
            'expired' => now()->addMinutes(7),
            'is_active' => true
        ]);

        Mail::to($newUser->email, 'KemaFish')
            ->send(new SignupVerify($newUser->name, $Token_verify->token, $newUser->email));

        return redirect()->route(
            'signup.verify',
            [
                'email' => $newUser->email,
                'token' => $newUser->token
            ]
        );
    }

    public function signupVerify()
    {
        return view('pages.signupVerify');
    }

    public function VerifyCode(Request $request)
    {
        $tokenSession = $request->query('token');
        $tokenActivation = $request->input('tokenActivation');

        $user = User::where('token', $tokenSession)->first();
        if ($tokenActivation != $user->tokenActivation->first()->token) {
            return redirect()->route('signup.verify')->withErrors([
                'tokenActivation' => 'Token yang anda masukkan salah'
            ]);
        }

        $user->tokenActivation->first()->update([
            'is_active' => true
        ]);

        return 'berhasil';
        // auth()->login($user);

        // return redirect()->route('home');
    }
}
