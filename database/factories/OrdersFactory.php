<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quantity = $this->faker->numberBetween(1, 5);
        $price = \App\Models\Service::factory()->create()->price;
        return [
            //
//            'user_id' => $user->id,
//            'service_id' =>$service->id,

            'user_id' => \App\Models\User::factory(),
            'service_id' => \App\Models\Service::factory(),
            'quantity' => $quantity,
            'total_price' => $price * $quantity,

        ];
    }
}
