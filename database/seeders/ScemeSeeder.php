<?php

namespace Database\Seeders;

use App\Models\Sceme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sceme::factory()
            ->count(10)
            ->create();
    }
}
