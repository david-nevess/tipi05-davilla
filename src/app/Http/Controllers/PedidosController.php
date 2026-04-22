<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function cardapio(){
        return view('site.pedidos.pedidos');
    }
}