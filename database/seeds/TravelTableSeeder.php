<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i=0; $i<100; $i++){
            $travel = new Travel();
            $travel->leaving_location = 'Italy';
            $travel->landing_location = $faker->state();
            $travel->flight_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $travel->flight_back_date = $faker->dateTimeBetween('+2week', '+1 month');
            $travel->price = $faker->numberBetween(400, 1200);
            $travel->save();
        }
    }
}
