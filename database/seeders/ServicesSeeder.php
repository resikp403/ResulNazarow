<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        {
//            $services = ['pepsi'=>'5','lipton'=>'5','kola'=>'10','turan chips'=>'10','lays'=>'15'];
//
//            foreach ($services as $service) {
//                Services::create(['name' => $service]);
//            }
            Seeder::insert([
                ['name' => 'Turan', 'price' => 15.00],
                ['name' => 'Pepsi', 'price' => 5.00],
            ]);
        }
    }
}
