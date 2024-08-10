<?php

namespace Database\Seeders;

use App\Models\Token_session;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Token_sessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Token_session::factory(5)->create();
    }
}
