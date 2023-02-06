<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductComment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductComment>
 */
class ProductCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $comment = ProductComment::inRandomOrder()->first() ? ProductComment::inRandomOrder()->first() : null;
        $user = User::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();
        return [
            'title' => fake()->text(fake()->numberBetween(30,60)),
            'description' => fake()->paragraph(),
            'reply_id' => $comment != null ? $comment->id : null,
            'user_id' => $user->id,
            'product_id' => $product->id
        ];
    }
}
