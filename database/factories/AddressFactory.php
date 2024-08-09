<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'id_user' => User::inRandomOrder()->first()->id,
            'country' => 'indonesia',
            'province' => $this->faker->city,
            'district' => $this->faker->word,
            'subdistrict' => $this->faker->word,
            'village' => $this->faker->word,
            'description' => $this->faker->text
        ];
    }
}
