<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Seeder::create([
            'user_id' => 1,
            'station_id' => 1,
            'start_time' => now(),
            'end_time' => now()->addHour(),
            'status' => 'confirmed',
        ]);
    }
}
