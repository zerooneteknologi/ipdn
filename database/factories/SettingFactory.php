<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'setting_embed' => '<iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLSdthchKJsV5zrlbxZmxClkaJKOFCni_YIPLHdRBmA0mSXtX8w/viewform?embedded=true"
            width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>',
        ];
    }
}
