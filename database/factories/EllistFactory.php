<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class EllistFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'type' => $this->faker->name(),
            // 'listLink' => $this->faker->text(),
            // 'views' => $this->faker->numberBetween(1, 7),
            'isPublic' => $this->faker->boolean(),
            'user_id' => User::pluck('id')->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
