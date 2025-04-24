<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        {

//            $PS_4 = ['PS4-1','PS4-2','PS4-3','PS4-4','PS4-5','PS4-6','PS4-7','PS4-8','PS4-9','PS4-10'];
//
//            $PS_5 =['PS5-1','PS5-2','PS5-3','PS5-4','PS5-5'];
//
//            foreach ($services as $obj) {
//                Services::create(['name' => $obj]);
//            }
            Seeder::insert([
                ['name' => 'Station A', 'type' => 'PS5', 'status' => 'available'],
                ['name' => 'Station B', 'type' => 'PS4', 'status' => 'busy'],
            ]);
        }
    }
}
