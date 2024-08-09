<?php

namespace Database\Seeders;

use App\Models\Token_session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
