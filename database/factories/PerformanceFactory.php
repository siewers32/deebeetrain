<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Department;
use App\Models\Performance;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerformanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Performance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => random_int(1,99),
            'trainer' => random_int(1,99),
            'performance_date' => $this->faker->date(now()),
            'start' => $this->faker->time('H:i:s', '09:00:00'),
            'end' => $this->faker->time('H:i:s', '22:00:00'),
        ];
    }
}

