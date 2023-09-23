<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EllinkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'url' => $this->faker->url(),
            'description' => $this->faker->text(),
            'health' => $this->faker->numberBetween(0, 1),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
