<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiretorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

            DB::table('Diretor')->insert(
        ['nome' => "Walter Salles",
        'descricao' => "é um diretor e produtor brasileiro",
        'foto' => "https://www.papodecinema.com.br/wp-content/uploads/2016/04/20180413-media-copy.webp",
        'nascimento' => "12 de abril de 1956",
        'nacionalidade_id' => 1
        ]
            );
    }
}
