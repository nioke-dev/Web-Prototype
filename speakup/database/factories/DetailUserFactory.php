<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailUser>
 */
class DetailUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'user_id' => User::factory()->create()->id,
           'name' => $this->faker->name(),
           'gender' => $this->faker->randomElement(['L', 'P']),
           'date_brith' => $this->faker->date('Y-m-d'),
           'phone' => $this->faker->numerify('+62###########'),
           'photo' => 'https://avatars.abstractapi.com/v1/?api_key=eb2f2de14b8449ae9f8cabf6687d68bc&name=' . $this->faker->name(),
           'address' => $this->faker->city(),
           'work_address' => $this->faker->address(),
           'practice_place_address' => $this->faker->address(),
           'office_phone_number' => $this->faker->numerify('+62###########'),
           'is_verified' => $this->faker->numberBetween(0, 1),
        ];
    }
}
