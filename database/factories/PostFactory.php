<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PostFactory extends Factory
{
    public function definition(): array
    {
        // Get a random existing user
        $user = User::inRandomOrder()->first();

        return [
            'user_name' => $user->name,
            'slug' => $this->faker->unique()->slug(),
            'content' => $this->faker->paragraph(1),
            'user_id' => $user->id,
        ];
    }
}