<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;

use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function cardapio(){

        // Buscar CATEGORIA para montar a lista de filtro
        $filtroCategoria = Categoria::where('status_categoria', 'ATIVA')->orderBy('ordem_categoria')->get();

        // Buscar todos os PRODUTOS ativos com a categoria
        $listaProduto = Produto::with('categoriaProduto')->where('status_produto', 'ATIVO')->orderBy('ordem_produto')->get();

        // dd($listaProduto);

        return view('site.cardapio.cardapio', compact('filtroCategoria', 'listaProduto'));

    }

    public function showProduto($slug){

        $produto = Produto::with('CategoriaProduto')->where('status_produto', 'ATIVO')->where('slug_produto', $slug)->firstOrFail();

        //dd($produto);

        return view('site.cardapio.produto', compact('produto'));
    }
}
