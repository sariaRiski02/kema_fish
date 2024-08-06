<?php

namespace Tests\Feature;

use App\Models\Contact;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RelationModelTest extends TestCase
{
    public function testUserAndContact()
    {
        $user = User::first();
        $UserToContact = $user->contact()->get();
        $contact = Contact::first();
        $ContactToUser = $contact->user()->first();
        // check if relation exist
        $this->assertNotNull($UserToContact);
        $this->assertNotNull($ContactToUser);
        // check one to many
        $this->assertGreaterThan(1, $UserToContact->count());
    }

    public function testUserToAddress()
    {
        $user = User::first();
        $UserToAddress = $user->address()->get();
        dd($UserToAddress);


        // check if relation exist
        $this->assertNotNull($UserToAddress);
        // check one to many
        $this->assertGreaterThan(1, $UserToAddress->count());
    }
}
