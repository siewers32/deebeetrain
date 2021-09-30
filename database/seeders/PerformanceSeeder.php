<?php

namespace Database\Seeders;

use App\Models\Performance;
use Illuminate\Database\Seeder;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Performance::factory()->count(100)->create();
    }
}
