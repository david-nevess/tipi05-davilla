<?php


use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\PedidosController;
use App\Http\Controllers\Site\CardapioController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\RegiaoController;
use App\Http\Controllers\Site\LoginController;

// Admin
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\CategoriaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/pedidos', [PedidosController::class, 'pedidos'])->name('pedidos');
Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
Route::get('/regiao', [RegiaoController::class, 'regiao'])->name('regiao');
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Submenu de cardapio
Route::get('/cardapio/categoria/{id}', [CardapioController::class, 'show'])->name('cardapio.categoria');

// Submenu de Produto
Route::get('/cardapio/produto/{slug}', [CardapioController::class, 'showProduto'])->name('cardapio.produto');

// Submenu de região
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');

// Submenu de loja
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');

Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/', [DashController::class, 'index'])->name('dash');

// Categorias
    route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
    
});
