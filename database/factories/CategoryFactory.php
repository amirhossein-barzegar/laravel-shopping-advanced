<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imgCategories = fake()->randomElement(['business','city','fashion','food','sports']);
        $category = fake()->unique()->randomElement(['کالای دیجتال','لوازم خانگی','کودک و اسباب بازی','رایانه و لپ تاپ','اخبار بین الملل','پوشاک و بازار','ارز دیجیتال','برنامه نویسی','تغذیه و سلامتی','ورزشی']);
        switch($category) {
            case 'تغذیه و سلامتی':
                $imgCategories = 'food';
            break;
            case 'اخبار بین الملل':
                $imgCategories = 'city';
            break;
            case 'ارز دیجیتال'||'برنامه نویسی':
                $imgCategories = 'business';
            break;
            case 'ورزشی':
                $imgCategories = 'sports';
            break;
        }
        return [
            // 10 تا
            'name' => $category,
            'description' => fake()->paragraph(),
            'slug' => implode('-',explode(' ', $category)),
            'img_thumb' => fake()->imageUrl(640,640,$imgCategories),
        ];
    }
}
