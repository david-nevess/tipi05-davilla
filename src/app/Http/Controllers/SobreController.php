<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function cardapio(){
        return view('site.sobre.sobre');
    }
}