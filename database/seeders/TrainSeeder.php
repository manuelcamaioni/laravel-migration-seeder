<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){

        for($i = 0; $i < 20; $i++){
            $newTrain = new Train();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure = $faker->dateTime();
            $newTrain->arrival = $faker->dateTime();
            $newTrain->train_code = $faker->postcode();
            $newTrain->no_coaches=$faker->numberBetween(1, 10);
            $newTrain->on_time=$faker->numberBetween(0,1);
            $newTrain->cancelled=$faker->numberBetween(0,1);
            $newTrain->save();
    }
    }
}
