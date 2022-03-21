<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'detail_user_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence(2),
            'course_type_id' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(20000, 50000),
            'discount' => $this->faker->numberBetween(0, 100),
            'benerfit' => 'unlimited access, free group training, free course, free seminar',
        ];
    }
}
