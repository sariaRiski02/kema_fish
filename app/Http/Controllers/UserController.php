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


        Mail::to('muhammatsaria026@student.unsrat.ac.id', 'Test')
            ->send(new SignupVerify());



        $user = new User();
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->name = $data['name'];
        $user->save();
        return redirect()->route('home');
    }
}
