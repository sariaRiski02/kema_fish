<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AddressSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\CategorySeeder;
use Symfony\Component\String\ByteString;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ContactSeeder::class,
            AddressSeeder::class,
            AdminSeeder::class,
            CategorySeeder::class
        ]);
    }
}
