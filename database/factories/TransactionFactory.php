<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => User::inRandomOrder()->first()->id,
            'id_product' => Product::inRandomOrder()->first()->id,
            'quantity_product' => rand(1, 15),
            'price_product' => rand(2000, 450000),
            'total_amount' => rand(300000, 500000),
            'status' => collect([
                'paid',
                'unpaid',
                'cencelled'
            ])->random(),
        ];
    }
}
