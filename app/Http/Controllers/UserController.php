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
    public function signup()
    {
        return view('components.signin-signup.signup');
    }

    public function signin() {}
}
