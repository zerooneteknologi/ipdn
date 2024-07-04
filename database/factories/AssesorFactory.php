<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assesor>
 */
class AssesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assesor_name' => fake()->name(),
            'assesor_slug' => fake()->slug(),
            'assesor_code' => fake()->lexify(),
            'assesor_license' => fake()->streetName(),
            'assesor_competency' => fake()->address(),
            'assesor_detail' => fake()->text(500),
        ];
    }
}
