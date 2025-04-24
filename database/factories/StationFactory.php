<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => 'Station ' . $this->faker->randomLetter(),
            'type' => $this->faker->randomElement(['PS4', 'PS5']),
            'status' => $this->faker->randomElement(['available', 'busy']),

        ];
    }
}
