<?php

namespace Database\Seeders;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       Team::create([
'tim' => 'Vitality'
       ]);

       Team::create([
        'tim' => 'G2'
               ]);


     Team::create([
                'tim' => 'Natus Vincere'
                       ]);


                       Team::create([
                        'tim' => 'Cloud9'
                               ]);
                        
                

    }
}
