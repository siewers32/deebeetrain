<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Department;
use App\Models\Performance;
use Illuminate\Database\Eloquent\Factories\Factory;
use \Carbon\Carbon;

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
        $start = $this->faker->randomElement(['09:00:00', '12:30:00']);
        $end =  ($start == "09:00:00")  ? "16:00:00":"18:30:00";
        return [
            'course_id' => random_int(1,5),
            'trainer' => 1,
            'performance_date' => $this->faker->dateTimeBetween('-30 days', '+30 days')->format('Y-m-d'),
            'start' => $start,
            'end' => $end
        ];
    }
}

// 'performance_date' => Carbon::createFromDate(random_int(2021,2023),random_int(1,12),random_int(1,28))->toDateTimeString(),
//random_int(1,99),
