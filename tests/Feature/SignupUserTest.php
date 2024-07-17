<?php

namespace Tests\Feature;

use App\Mail\SignupVerify;
use App\Models\Token_Activation;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SignupUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_userSignupSuccess()
    {

        Mail::fake();
        $this->post('/signup', [
            'name' => 'KemaFish',
            'email' => 'test123@test.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $user = User::where('email', 'test123@test.com')->first();

        $this->assertDatabaseHas('users', [
            'email' => $user->email
        ]);

        $this->assertDatabaseHas('tokens_activation', [
            'id_user' => $user->id
        ]);

        Mail::assertSent(SignupVerify::class, function (SignupVerify $mail) use ($user) {
            return $mail->hasTo($user->email) &&
                $mail->email === $user->email &&
                $mail->name === $user->name &&
                (int) $user->tokenActivation->first()->token ===  $mail->token;
        });
    }

    public function test_VerifyCodeSuccess()
    {
        Mail::fake();
        $this->post('/signup', [
            'name' => 'KemaFish',
            'email' => 'test123@test.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);
    }
}
