<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Filme extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Filme')->insert(
        
            ['nome'=> "Brinquedo Assassino 1",
            'descricao'=> "Boneco ruivo surtado",
            'diretor_id' => "Don Mancini",
            'produtora_id' => "Universal Pictures",
            'genero' => "Terror",
            'ator' => "Alex Vincent, Brad Dourif, Gabriel Bateman, Aubrey Plaza,",
            'lancamento'  => "20 de abril de 1989",
            'classificacao' => "+16",
            'duracao' => "1h27min",
            'poster' => "https://br.web.img2.acsta.net/pictures/14/10/10/18/18/494547.jpg",
            'capa' => "https://br.web.img2.acsta.net/pictures/14/10/10/18/18/494547.jpg",
            'nacionalidade_id' => 2
        ],


            ['nome'=> "Crepusculo",
            'descricao'=> "Menina sonsa, vampirao bonitao e lobao friendzone",
            'diretor_id' => "Catherine Hardwicke",
            'produtora_id' => "Summit Entertainment",
            'genero' => "Romance",
            'ator' => "Kristen Stewart, Robert Pattinson, Taylor Lautner,",
            'lancamento'  => "19 de dezembro de 2008",
            'classificacao' => "+12",
            'duracao' => "2h10min",
            'poster' => "https://img.elo7.com.br/product/zoom/4851092/big-poster-filme-crepusculo-tamanho-90x60-cm-lo05-crepusculo.jpg",
            'capa' => "https://img.elo7.com.br/product/zoom/4851092/big-poster-filme-crepusculo-tamanho-90x60-cm-lo05-crepusculo.jpg",
            'nacionalidade_id' => 2
        ],
            
            

        );
    }
}
