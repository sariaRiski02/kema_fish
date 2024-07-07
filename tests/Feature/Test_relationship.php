<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Token_Activation;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Test_relationship extends TestCase
{
    //
    public function test_relation_user_and_tokenActivation()
    {

        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');

        $user = User::first();
        $token = new Token_Activation();
        $token->token = '123456';
        $token->is_active = true;
        $token->id_user = $user->id;
        $token->save();

        $this->assertEquals($user->id, $token->user->id);
    }
}
