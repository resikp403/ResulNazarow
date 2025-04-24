<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\payments>
 */
class PaymentsFactory extends Factory
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
//            'user_id' => $user->id,
//            'booking_id' =>$booking->id,
            'user_id' => \App\Models\User::factory(),
            'booking_id' => \App\Models\Bookings::factory(),
            'amount' => $this->faker->randomFloat(2, 200, 1500),
            'methods' => $this->faker->randomElement(['card', 'cash', 'online'])
        ];
    }
}
