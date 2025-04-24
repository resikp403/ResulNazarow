<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\BookingsFactory;
use Database\Factories\OrdersFactory;
use Database\Factories\PaymentsFactory;
use Database\Factories\servicesFactory;
use Database\Factories\StationFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StationsSeeder::class,
            ServicesSeeder::class,
        ]);


        User::factory()->count(10)->create();
        StationFactory::factory()->count(5)->create();
        servicesFactory::factory()->count(3)->create();
        BookingsFactory::factory()->count(10)->create();
        OrdersFactory::factory()->count(10)->create();
        PaymentsFactory::factory()->count(10)->create();
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
