<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeePerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++) {
            DB::table('employee_performance')->insertOrIgnore([
                'employee_id' => random_int(1,12),
                'performance_id' => random_int(1,25),
                'evaluation' => random_int(1,5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
