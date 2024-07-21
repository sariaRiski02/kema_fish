<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SignupVerify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Casts\Json;

class UserController extends Controller
{

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
            'expired' => now()->addMinutes(7)
        ]);

        Mail::to($newUser->email, 'KemaFish')
            ->send(new SignupVerify(
                $newUser->name,
                $Token_verify->token,
                $newUser->email
            ));

        session([
            'email' => $newUser->email,
            'tokenActivation' => $newUser->token
        ]);
        return redirect()
            ->route('verify');
    }

    public function verifyForm()
    {
        $sessionEmail = session('email');
        $tokenActivation = session('tokenActivation');

        $result = $tokenActivation && $sessionEmail;
        if (!$result) {
            return redirect()->route('signup');
        }

        $user = User::where('email', $sessionEmail)->first();
        $Token_verify = $user->tokenActivation->first();


        return view('pages.signupVerify', [
            'time' => $Token_verify->expired,
        ]);
    }

    public function VerifyCode(Request $request)
    {
        $emailSession = session('email');
        $tokenEmailSession = session('tokenActivation');
        $token = $request->input('tokenActivation');

        $user = User::where('email', $emailSession)->first();
        if ($user->token != $tokenEmailSession) {
            return redirect()->route('signup.verify')->withErrors([
                'tokenActivation' => 'Kesalahan pada token'
            ]);
        }
        if ($token != $user->tokenActivation->first()->token) {
            return redirect()->route('signup.verify')->withErrors([
                'tokenActivation' => 'Token yang anda masukkan salah'
            ]);
        }
        if ($user->tokenActivation->first()->expired < now()) {
            return redirect()->route('signup.verify')->withErrors([
                'tokenActivation' => 'Token sudah kadaluarsa'
            ]);
        }
        $user->tokenActivation->first()->update([
            'is_active' => true
        ]);

        return redirect()->route('home');
        // auth()->login($user);

        // return redirect()->route('home');
    }

    public function resendCode()
    {
        $sessionEmail = session('email');
        $tokenActivation = session('tokenActivation');

        $result = $tokenActivation && $sessionEmail;
        if (!$result) {
            return redirect()->route('verify')->withErrors([
                'tokenActivation' => 'Token tidak ditemukan'
            ]);
        }

        $user = User::where('email', $sessionEmail)->first();
        $user->tokenActivation()->update([
            'token' => mt_rand(100000, 999999), // random angka 6 digit
            'expired' => now()->addMinutes(7)
        ]);

        $token = $user->tokenActivation->first()->token;
        Mail::to($user->email, 'KemaFish')
            ->send(new SignupVerify(
                $user->name,
                $token,
                $user->email
            ));

        session([
            'email' => $user->email,
            'tokenActivation' => $user->token
        ]);
        return redirect()->route('verify');
    }



    public function loginPost(LoginRequest $request)
    {
        $data = $request->validated();
        // dd($data);
        $user = User::where('email', $data['email'])->first();

        if (!$user && !Hash::check($data["password"], $user->password)) {
            return redirect()->route('signin')
                ->withErrors([
                    "errors" => "Email Atau Password Salah"
                ])
                ->onlyInput('email');
        }
        session([
            'email' => $user->email,
            'token' => $user->token
        ]);

        return redirect()->route('home');
    }


    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}
