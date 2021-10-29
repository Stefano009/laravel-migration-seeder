<?php

use Illuminate\Database\Seeder;
use App\worker;
use Faker\Generator as Faker;

class workerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            for($i=0;$i<100;$i++)
            {
                $worker = new worker();
                $worker->name = $faker->name();
                $worker->last_name = $faker->lastname();
                $worker->age = $faker->numberBetween(20,65);
                $worker->level = $faker->numberBetween(1,20);
                $worker->save();
            }
    }
}
