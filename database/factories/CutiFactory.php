<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuti>
 */
class CutiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start_date = $this->faker->dateTimeBetween('-2 months', '+2 months');
        $end_date = $this->faker->dateTimeBetween($start_date, '+2 months');

        return [
            'user_id' => mt_rand(1,6),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'description' => $this->faker->sentence,
            'status' => $this->faker->boolean(),
        ];
    }
}
