<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        print_r('hi');
        for ($i = 0; $i < 50; $i++)
        {
            print_r($i.' ');
            Student::create(
                [
                    'name'=>fake()->name(),
                    'email'=>fake()->email(),
                    'age'=>fake()->biasedNumberBetween(18,70),
                    'city'=>fake()->numberBetween(1,10),
                    'status'=>fake()->numberBetween(0,1)

                ]
            );
        }
    }
}
