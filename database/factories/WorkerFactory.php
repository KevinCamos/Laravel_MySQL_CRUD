<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
           return [
            'fname' => $this->faker->firstName(),
            // 'fname' => $this->faker->firstName($gender = null|'male'|'female'),
            'lname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->freeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
