<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_id' => random_int(1,10),
            'first_name' => $this->faker->firstName(),
            'prefix' => $this->faker->randomElement(['van', 'van der', 'op de', 'van den', '', '', '', '']),
            'last_name' => $this->faker->lastName(),
            'email'=> $this->faker->email(),
        ];
    }
}
