<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SignupUserTest extends TestCase
{
    public function test_SignupSuccess()
    {

        $this->artisan('migrate:fresh');

        $this->post('/signup', [
            'name' => 'Test User',
            'email' => 'test123@yahoo.com',
            'password' => 'password123',
            'password_confirmation' => 'password123'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'test123@yahoo.com'
        ]);
    }


    public function test_SignupAssertEmailhasSend()
    {
        $this->artisan('migrate:fresh');
    }

    public function test_VerifyToken()
    {
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');


        $user = User::first();
        $token_Auth = $user->tokenActivation()->create([
            'token' => mt_rand(100000, 999999),
            'expired' => now()->addMinutes(7),
            'is_active' => true
        ]);
        $response = $this->post('/signup/verify', [
            'token' => $token_Auth->token,
        ])->withCookies([
            'email' => $user->email,
            'tokenActivation' => $token_Auth->token
        ]);

        $response->assertRedirect('/');
    }
}
