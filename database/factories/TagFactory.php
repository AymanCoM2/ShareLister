<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tagWord' => $this->faker->name(),
            'created_at' => now(),
            'updated_at' => now(),

            // 'email_verified_at' => now(),
            // 'password' => Hash::make('12345678'), // password
            // 'remember_token' => Str::random(10),
        ];
    }
}
