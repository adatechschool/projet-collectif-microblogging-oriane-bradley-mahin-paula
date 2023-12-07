<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Comment here.
            'title' => fake()->title(),
            'slug' => fake()->slug(),
            'content'=> fake()->paragraph(1),
            'user_id'=> fake()->numberBetween(1, 5),
        ];
    }
}
