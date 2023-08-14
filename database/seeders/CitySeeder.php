<?php

namespace Database\Seeders;

use App\Models\city;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i=0; $i < 10; $i++) {
            # code...
            city::create([
                'city' => fake()->unique()->randomElement(['Lahore','Pindi','Jhelum','Gujrat','Gujranwala','Islamabad','Gujer Khan','Sawawa','Dena','Khariyaan'])
            ]);
        }
    }
}
