<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

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
}
