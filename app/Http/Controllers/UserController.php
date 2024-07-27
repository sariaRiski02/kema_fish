<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SignupVerify;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UpdateUserRequest;
use Laravel\Socialite\Facades\Socialite;


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
        $user = User::where('email', $data['email'])->first();
        if (!$user || !Hash::check($data["password"], $user->password)) {
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

    // login with google
    public function googleCallback()
    {
        $userGoogle = Socialite::driver('google')->user();

        $userExist = User::where('email', $userGoogle->email)->first();
        if ($userExist) {
            session([
                'email' => $userExist->email,
                'token' => $userExist->token
            ]);
            return redirect()->route('home');
        } else {
            $user = User::create([
                'name' => $userGoogle->name,
                'email' => $userGoogle->email,
                'password' => Hash::make($userGoogle->name . "KemaFish")
            ]);
            session([
                'email' => $user->email,
                'token' => $user->token
            ]);
        }

        $user->tokenActivation()->create([
            'token' => mt_rand(100000, 999999), // random angka 6 digit
            'is_active' => true,
            'expired' => now()->addMinutes(7)
        ]);

        return redirect()->route('home');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }

    public function updateUserPersonal(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255|min:4',
            'last_name' => 'required|string|max:255|min:4',
        ]);

        User::where('email', session('email'))->update([
            'name' => $data['first_name'] . ' ' . $data['last_name']
        ]);
        return redirect()->route('settings');
    }

    public function updateUserPassword(Request $request)
    {
        $data = $request->validate([
            'current_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if ($request->fails()) {
            return redirect()->route('settings')->withErrors($request->errors())->withInput();
        }

        $user = User::where('email', session('email'))->first();
        if (!Hash::check($data['current_password'], $user->password)) {
            return redirect()->route('settings')->withErrors([
                'current_password' => 'Password yang anda masukkan salah'
            ]);
        }
        $user->update([
            'password' => bcrypt($data['password'])
        ]);
        return redirect()->route('settings');
    }


    public function updateUserContact(Request $request)
    {
        $data = $request->validate([
            'phone' => 'required|string|max:255|min:4'
        ]);

        if ($request->fails()) {
            // Validation failed
            return redirect()->back()->withErrors($request->errors())->withInput();
        }

        $user = User::where('email', session('email'));

        $user->contact()->create([
            'email' => session('email'),
            'phone' => $data['phone']
        ]);
    }

    public function updateUserAddress(Request $request)
    {
        $data = $request->validate([
            'city' => 'required|string|max:255|min:4',
            'province' => 'required|string|max:255|min:4',
            'subdistrict' => 'required|string|max:255|min:4',
            'village' => 'required|string|max:255|min:4',
            'postal_code' => 'required|string|max:255|min:4',
            'address_details' => 'string|max:255',
        ]);

        if ($request->fails()) {
            // Validation failed
            return redirect()->back()->withErrors($request->errors())->withInput();
        }

        $user = User::where('email', session('email'));
        $user->address()->create([
            'city' => $data['city'],
            'province' => $data['province'],
            'subdistrict' => $data['subdistrict'],
            'vilage' => $data['village'],
            'postal_code' => $data['postal_code'],
            'address_details' => $data['address_details'],
        ]);
    }
}
