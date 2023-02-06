<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCatgory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $name = implode(' ',fake()->words(fake()->numberBetween(3,5))),
            'description' => fake()->paragraph(),
            'slug' => implode('-',explode(' ',$name)),
            'img_thumb' => fake()->imageUrl(640,640),
        ];
    }
}
