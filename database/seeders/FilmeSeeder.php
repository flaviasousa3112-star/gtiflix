<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
         [
            ['nome'=> "Brinquedo Assassino 1",
            'descricao'=> "Boneco ruivo surtado",
            'diretor_id' => "1",
            'produtora_id' => "1",
            'lancamento'  => "1989-04-20",
            'classificacao' => "16",
            'duracao' => "87",
            'poster' => "https://br.web.img2.acsta.net/pictures/14/10/10/18/18/494547.jpg",
            'capa' => "https://br.web.img2.acsta.net/pictures/14/10/10/18/18/494547.jpg",
            'nacionalidade_id' => 2
        ],


            ['nome'=> "Crepusculo",
            'descricao'=> "Menina sonsa, vampirao bonitao e lobao friendzone",
            'diretor_id' => "1",
            'produtora_id' => "1",
            'lancamento'  => "2008-12-19",
            'classificacao' => "12",
            'duracao' => "130",
            'poster' => "https://img.elo7.com.br/product/zoom/4851092/big-poster-filme-crepusculo-tamanho-90x60-cm-lo05-crepusculo.jpg",
            'capa' => "https://img.elo7.com.br/product/zoom/4851092/big-poster-filme-crepusculo-tamanho-90x60-cm-lo05-crepusculo.jpg",
            'nacionalidade_id' => 2
        ],
         ]  
            

        );
    }
}
