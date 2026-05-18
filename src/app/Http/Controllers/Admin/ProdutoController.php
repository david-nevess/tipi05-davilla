<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{
    public function index(){

        $produto = Produto::orderBy('ordem_produto')->get();

        return view('admin.produto.index', compact('produtos'));
        
    }
}
