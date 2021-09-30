<?php

namespace Database\Seeders;

use App\Models\EmployeePerformance;
use Illuminate\Database\Seeder;

class EmployeePerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeePerformance::factory()->count(100)->create();
    }
}
