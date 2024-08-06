<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Contact::class;
    public function definition(): array
    {
        return [
            'id_user' => User::inRandomOrder()->first()->id,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail
        ];
    }
}
