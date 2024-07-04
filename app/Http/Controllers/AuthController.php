<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class AuthController extends Controller
{
    public function signupForm()
    {
        return view('pages.signup');
    }


    public function signup(SignupRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('home');
    }
}
