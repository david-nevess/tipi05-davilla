<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Metodo HOME - Carregar a index
    public function home(){

        // Buscar categoria para montar a lista de filtro
        $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')->orderBy('ordem_categoria')->get();

        // Buscar todos os PRODUTOS ativos com a categoria
        $listaProduto = Produto::with('categoriaProduto')->where('status_produto', 'ATIVO')->orderBy('ordem_produto')->get();

        // 2. Buscar BANNERS ativos seguindo sua tbl_banner
        $listaBanner = Banner::where('status_banner', 'ATIVO')
            ->orderBy('ordem_banner')
            ->get();

        return view('site.home.home', compact('filtroCategoria', 'listaProduto', 'listaBanner'));
    }

    public function showProduto($slug){

        $produto = Produto::with('categoriaProduto')->where('status_produto', 'ATIVO')->where('slug_produto', $slug)->firstOrFail();

        return view('site.cardapio.produto', compact('produto'));
    }
}