<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;
class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i <20; $i++){

            Players::create([
                'naziv' =>$faker->firstName(),
                'mapa' =>$faker->randomElement(['Mirage', 'Cache', 'Vertigo']),
                'rolaId' => rand(1,3),
                'timId' => rand(1,4)
            ]);
        }
    }
}
