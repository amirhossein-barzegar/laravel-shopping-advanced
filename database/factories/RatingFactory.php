<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customer = User::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();
        return [
            'star' => fake()->numberBetween(1,5), 
            'feedback' => fake()->randomElement([fake()->text(120),null]),
            'customer_id' => $customer->id,
            'product_id' => $product->id
        ];
    }
}
