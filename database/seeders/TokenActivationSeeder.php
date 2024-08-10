<?php

namespace Database\Seeders;

use App\Models\Token_activation;
use Illuminate\Database\Seeder;

class TokenActivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Token_activation::factory(5)->create();
    }
}
