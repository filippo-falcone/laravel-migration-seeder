<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker = \Faker\Factory::create('it_IT');
        for($i = 0; $i <= 19; $i++) {
            $newtrain = new Train();
            $newtrain->operator = $faker->randomElement(['Trenord', 'Trenitalia', 'Italo', 'Trenitalia Tper', 'Ferrovie del Sud Est']);
            $newtrain->departure_station = $faker->city();
            $newtrain->arrival_station = $faker->city();
            $newtrain->departure_time = $faker->time();
            $newtrain->arrival_time = $faker->time();
            $newtrain->train_code = $faker->numberBetween(1000, 9999);
            $newtrain->wagons = $faker->numberBetween(1, 20);
            $newtrain->on_time = $faker->boolean();
            $newtrain->is_cancelled = $faker->boolean();
            $newtrain->save();
        }
    }
}
