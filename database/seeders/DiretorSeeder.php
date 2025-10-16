<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

            DB::table('diretores')->insert(
        [        
        ['nome' => "Walter Salles",
        'descricao' => "é um diretor e produtor brasileiro",
        'foto' => "https://www.papodecinema.com.br/wp-content/uploads/2016/04/20180413-media-copy.webp",
        'nascimento' => "1956-04-12",
        'nacionalidade_id' => 1],
        ]   
     );
    }
}
