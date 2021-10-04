<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(["Database ontwerp", "Object oriented PHP", "Python", "Git and Github", "Wordpress"])." part ".random_int(1,10),
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
