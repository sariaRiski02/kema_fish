<?php

namespace Tests\Feature;

use Tests\TestCase;
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
    }
}
