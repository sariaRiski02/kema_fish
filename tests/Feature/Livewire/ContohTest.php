<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Contoh;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ContohTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Contoh::class)
            ->assertStatus(200);
    }
}
