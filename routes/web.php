<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Post;
use App\Http\Livewire\Setting;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', Login::class)->name('login');
// ADMIN
Route::get('/', Home::class)->name('home');
Route::get('/servicos', Home::class)->name('servicos');
Route::get('/servicos/documentos-necessarios/', Home::class)->name('servicos.documentos-necessarios');
Route::get('/servicos/emissao-de-certidoes-fiscais/', Home::class)->name('servicos.emissao-certidao-fiscais');

// CONTATO
Route::get('/contato', Home::class)->name('contato');
Route::get('/contato/ouvidoria', Home::class)->name('contato.ouvidoria');
Route::get('/contato/trabalhe-conosco', Home::class)->name('contato.trabalhe-conosco');
Route::get('/contato/fale-conosco', Home::class)->name('contato.trabalhe-conosco');

// TABELA DE CUSTA DE EMOLUMENTOS
Route::get('/tabela-de-custas-e-emolumentos', Home::class)->name('tabela-custa-emolumentos');
Route::get('/calular-emolumentos', Home::class)->name('calcular-emolumentos');

// REQUERIMENTOS
Route::get('/requerimentos', Home::class)->name('requerimentos');
Route::get('/requerimentos/ri/modelos', Home::class)->name('requerimento.ri');
Route::get('/requerimentos/td/modelos', Home::class)->name('requerimento.ri');


Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
    Route::get('/posts', Post::class);
    Route::get('/settings', Setting::class);
});
