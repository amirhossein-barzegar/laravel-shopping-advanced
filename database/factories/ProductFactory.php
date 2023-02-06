<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;
use App\Models\Discount;
use App\Models\ProductCategory;
use App\Models\Brand;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $dicount = Discount::inRandomOrder()->first();
        $category = ProductCategory::inRandomOrder()->first();
        $brand = Brand::inRandomOrder()->first();
        $images = 'img/products/digital_'.fake()->numberBetween(1,22).'.jpg'.','.'img/products/digital_'.fake()->numberBetween(1,22).'.jpg';
        return [
            'name' => implode(' ',fake()->words(fake()->numberBetween(3,6))),
            'excerpt' => fake()->text(fake()->numberBetween(100,200)),
            'description' => implode(' ',fake()->paragraphs()),
            'price' => round(fake()->numberBetween(50000,3000000)),
            'quantity' => fake()->numberBetween(0,30),
            'stock_limit' => fake()->numberBetween(1,15),
            'stock_status' => fake()->randomElement([Product::AVAILABLE_PRODUCT,Product::UNAVAILABLE_PRODUCT]),
            'img_thumb' => 'img/products/digital_'.fake()->unique()->numberBetween(1,22).'.jpg',
            'img_gallery' => $images,
            'views' => fake()->numberBetween(1,1500),
            'selled_count'=> fake()->numberBetween(0,20),
            'seller_id' => $user->id,
            'category_id' => $category->id,
            'discount_id' => $dicount->id,
            'brand_id' => $brand->id
        ];
    }
}
