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
            'category_id' => mt_rand(1, 3),
            'article_title' => fake()->name(),
            'article_slug' => fake()->slug(),
            'article_type' => mt_rand(1, 4),
            'article_description' => fake()->paragraph(6),
        ];
    }
}
