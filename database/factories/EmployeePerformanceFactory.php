<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Department;
use App\Models\EmployeePerformance;
use App\Models\Performance;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeePerformanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeePerformance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'evaluation' => random_int(1,10),
        ];
    }
}
