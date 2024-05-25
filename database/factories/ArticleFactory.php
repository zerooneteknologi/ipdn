<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomDigitNotNull(),
            'category_id' => fake()->randomDigitNotNull(),
            'article_title' => fake()->name(),
            'article_slug' => fake()->slug(),
            'article_type' => fake()->sentence(),
            'article_description' => fake()->text(500),
            'article_image' => fake()->imageUrl(640, 480, 'animals', true)
        ];
    }
}
