<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Address;
use Illuminate\Database\Seeder;
use Database\Seeders\CartSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\AddressSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\TransactionSeeder;
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
            CategorySeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            TransactionSeeder::class
        ]);
    }
}
