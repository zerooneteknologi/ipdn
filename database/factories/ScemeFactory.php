<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sceme>
 */
class ScemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sceme_name' => fake()->streetName(),
            'sceme_slug' => fake()->slug(),
            'sceme_code' => fake()->lexify(),
            'sceme_status' => fake()->numberBetween(1, 2),
            'sceme_bnsp' => rand(1, 3),
            'sceme_detail' => fake()->paragraph(10),
        ];
    }
}
