<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('Nacionalidade')->insert(
        
            ['nome' => "Brasileiro",
        ],

            ['nome' => "Estadunidense"
            ]   
        );
    }

}
