<?php

namespace Database\Factories;

use App\Models\Ellink;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class ReviewFactory extends Factory
{

    public function definition(): array
    {
        return [
            'content' => $this->faker->name(),
            'rating' => $this->faker->numberBetween(1, 5),
            'user_id' => User::pluck('id')->random(),
            'ellink_id' => Ellink::pluck('id')->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
