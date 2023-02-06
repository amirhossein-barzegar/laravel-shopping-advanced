<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
    public function definition()
    {
        $authorId = null;
        $authors = User::has('roles')->with('roles')->inRandomOrder()->get();
        foreach($authors as $author) {
            foreach($author->roles as $role) {
                if ($role->name == 'author') {
                    $authorId = $author->id;
                }
            }
        }
        return [
            'title' => $title = implode(' ',fake()->words(fake()->numberBetween(2,6))),
            'excerpt' => fake()->text(fake()->numberBetween(100,200)),
            'description' => fake()->paragraph(),
            'img_thumb' => fake()->imageUrl(640,640,'business'),
            'slug' => implode('-',explode(' ',$title)),
            'views' => fake()->numberBetween(0, 1500),
            'author_id' => $authorId,
            'category_id' => fake()->numberBetween(1,10)
        ];
    }
}
