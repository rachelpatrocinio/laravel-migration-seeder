<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->company = $faker->bothify('????????');
            $new_train->departure_station = $faker->bothify('????????');
            $new_train->arrival_station = $faker->bothify('????????');
            // date() non è quello esatto.. 
            $new_train->departure_time = $faker->date();
            $new_train->arrival_time = $faker->date();
            $new_train->train_code = $faker->bothify('#####');
            $new_train->number_of_carriages = $faker->numberBetween(11,20);
            $new_train->on_time = $faker->randomElement([true, false]);
            $new_train->cancelled = $faker->randomElement([true, false]);
            $new_train->save();
        }
    }
}
