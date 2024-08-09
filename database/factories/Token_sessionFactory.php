<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Token_session>
 */
class Token_sessionFactory extends Factory
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
            'is_session' => collect([true, false])->random(),
            'token' => Str::uuid(),
        ];
    }
}
