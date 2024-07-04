<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Seeting;
use App\Models\Article;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Article::factory()->create([
            'user_id' => 1,
            'category_id' => 1,
            'article_title' => fake()->name(),
            'article_slug' => 'lembaga_sertifikasi_profesi',
            'article_type' => 1,
            'article_description' => fake()->paragraph(6),
        ]);

        Article::factory()->create([
            'user_id' => 1,
            'category_id' => 1,
            'article_title' => fake()->name(),
            'article_slug' => 'struktur_organisasi',
            'article_type' => 2,
            'article_description' => fake()->paragraph(6),
        ]);

        $this->call([
            CategorySeeder::class,
            SettingSeeder::class,
            VisionSeeder::class,
            ScemeSeeder::class,
            AssesorSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
