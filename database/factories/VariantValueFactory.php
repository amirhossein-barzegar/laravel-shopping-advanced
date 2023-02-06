<?php

namespace Database\Factories;

use App\Models\VariantType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VariantValue>
 */
class VariantValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $variantType = VariantType::inRandomOrder()->first();
        return [
            'value' => fake()->unique()->colorName(),
            'price' => fake()->numberBetween(20000,200000),
            'quantity' => fake()->numberBetween(1,10),
            'variant_type_id' => $variantType->id
        ];
    }
}
