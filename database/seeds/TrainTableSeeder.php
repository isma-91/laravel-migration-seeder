<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $train = new Train();
            $train->agency              = $faker->randomElement(['Italo',            'Trenitalia', 'Frecciarossa', 'Bubu', 'Thomas']);
            $train->departure_station   = $faker->words(rand(1, 3), true);
            $train->arrival_station     = $faker->words(rand(1, 3), true);
            $train->departure_time      = $faker->time('H:i');
            $train->arrival_time        = $faker->time('H:i');
            $train->train_code          = $faker->randomNumber(6, true);
            $train->number_of_carriages  = $faker->numberBetween(10, 40);
            $train->in_time             = [true, false][rand(0, 1)];
            $train->deleted             = [true, false][rand(0, 1)];
            $train->save();
        }
    }
}
