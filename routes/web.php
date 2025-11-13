<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\Diretor;
use App\Models\Filme;
use App\Models\Produtora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Ste', function() {
    echo 'Olá Ste';

});

Route::get('/filmes/{filme}', function($filme) {
    echo 'Acessando dados do filme: '. $filme;

});

Route::view('/conheca', 'sobre');

Route::get('/generos', function() {
    $minhaVariavel = Genero::all();
    dd($minhaVariavel);
});

Route::get('/atores', function() {
    $minhaNovaVariavel = Ator::all();
    dd($minhaVariavel);
});

Route::get('/', function(){
    $filmes = Filme::all();
    return view('lista-filmes',
        compact('filmes'));
})->name('lista-filmes');

Route::get('/detalhes-filme/{filme}',
function(Filme $filme){
return view ('detalhes-filme', compact('filme'));
})->name('detalhes-filme');


Route::view('/login','login')->name('login');

Route::post('/logar', function (Request $request) {
    dd($request);
})->name('logar');

Route::get('/lista-produtoras', function(){
    $produtoras = Produtora ::all();
    return view('lista-produtoras',
        compact('produtoras'));
})->name('lista-produtoras');

Route::get('/lista-atores', function(){
    $atores = Ator ::all();
    return view('lista-atores',
        compact('atores'));
})->name('lista-atores');

Route::get('/lista-generos', function(){
    $generos = Genero ::all();
    return view('lista-generos',
        compact('generos'));
})->name('lista-generos');


Route::get('/lista-diretores', function(){
    $diretores = Diretor ::all();
    return view('lista-diretores',
        compact('diretores'));
})->name('lista-diretores');




