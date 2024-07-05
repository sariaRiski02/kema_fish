<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class UserController extends Controller
{
    public function signupForm()
    {
        return view('pages.signup');
    }
}
