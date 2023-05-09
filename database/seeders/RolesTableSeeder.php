<?php

namespace Database\Seeders;
use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Roles::create([
'rola' => 'Rifler'
       ]);


       Roles::create([
        'rola' => 'Lurker'
               ]);

               Roles::create([
                'rola' => 'Support'
                       ]);

                       Roles::create([
                        'rola' => 'AWPer'
                               ]);

                               Roles::create([
                                'rola' => 'EntryFragger'
                                       ]);
    }
}
