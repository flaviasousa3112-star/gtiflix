<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        DB::table('atores')->insert(
                
            ['nome'=> "Vagner Moura",
            'descricao'=> "Ator Foda brasileiro",
            'nacionalidade_id' => 1 ],

            ['nome'=> "Will Smith",
            'descricao'=> "O que fez um Maluco no Pedaco",
            'nacionalidade_id' => 2 ],
            
        );
    }
}