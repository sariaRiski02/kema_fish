<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_category' => Category::inRandomOrder()->first()->id,
            'id_admin' => Admin::inRandomOrder()->first()->id,
            'name' => $this->faker->word,
            'entity_product' => rand(0, 12),
            'description' => $this->faker->text,
        ];
    }
}
