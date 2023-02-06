<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        return [
            'title' => implode(' ',fake()->words(fake()->numberBetween(2,6))),
            'description' => fake()->paragraph(),
            'user_id' => $user->id,
            'post_id' => fake()->numberBetween(1,10)
        ];
    }
}
