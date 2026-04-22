<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function pedidos(){
    return view('site.contato.contato');
}
}
