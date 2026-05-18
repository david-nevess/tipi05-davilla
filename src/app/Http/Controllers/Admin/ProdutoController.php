<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function index(){

        $categorias = Categoria::orderBy('ordem_categoria')->get();

        return view('admin.produto.index', compact('categorias'));
        
    }
}
