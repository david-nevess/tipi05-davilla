<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\RegiaoController;
use App\Http\Controllers\LoginController;
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

// Submenu de região
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');

// Submenu de loja
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');
