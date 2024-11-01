<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employeer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employeer>
 */
class EmployeerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employeer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomNumber(4),
            'location' => fake()->city(),
            'age' => fake()->randomNumber()
            //
        ];
    }
}
