<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => implode(' ',fake()->unique()->words(fake()->numberBetween(1,3))),
            'description' => fake()->paragraph(),
            'slug' => fake()->unique()->slug(),
            'site_url' => fake()->unique()->domainName()
        ];
    }
}
