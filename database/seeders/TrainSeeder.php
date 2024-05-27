<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker): void
    {

        DB::table('trains')->truncate();
        $companies = ['Italo', 'Eurostar', 'Freccia Rossa', 'Freccia Argento', 'Freccia Bianca'];

        for($i = 0; $i < 25; $i++){
            $new_train = new Train();
            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('+1 week','+2 week');
            $new_train->arrival_time = $faker->dateTimeBetween('+2 week','+3 week');
            $new_train->train_code = $faker->bothify('#####');
            $new_train->number_of_carriages = $faker->numberBetween(11,20);
            $new_train->on_time = $faker->randomElement([true, false]);
            $new_train->cancelled = $faker->randomElement([true, false]);
            $new_train->save();
        }
    }
}
