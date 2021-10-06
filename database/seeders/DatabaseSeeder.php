<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentSeeder::class);
        //$this->call(EmployeeSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(PerformanceSeeder::class);
        $this->call(UserSeeder::class);
    }
}
