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

        $this->call([
            ScemeSeeder::class,
            AssesorSeeder::class,
            SettingSeeder::class,
            PartnerSeeder::class,
            ArticleSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
