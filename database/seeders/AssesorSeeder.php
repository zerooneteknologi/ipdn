<?php

namespace Database\Seeders;

use App\Models\Assesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assesor::factory()
            ->count(10)
            ->create();
    }
}
