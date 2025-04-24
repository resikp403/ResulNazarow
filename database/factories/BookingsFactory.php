<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bookings>
 */
class BookingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $start = $this->faker->dateTimeBetween('-1 days', 'now');
        return [
            //
//            'user_id' => $user->id,
//            'station_id' =>$station->id,
//            'start_time' => $this->faker->time(),
//            'end_time' => $this->faker->time(),

            'user_id' => \App\Models\User::factory(),
            'station_id' => \App\Models\Stations::factory(),
            'start_time' => $start,
            'end_time' => (clone $start)->modify('+1 hour'),
            'status' => $this->faker->randomElement(['confirmed', 'cancelled'])
        ];
    }
}
