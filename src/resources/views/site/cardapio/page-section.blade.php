<section class="page-title" style="background-image:url('{{ asset('images/background/banner-doceria.jpg') }}')">
    <div class="auto-container">
        <h1>{{ $produto->nome_produto }}</h1> 
        
        <ul class="page-breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/cardapio') }}">Cardápio</a></li>
            <li>{{ $produto->nome_produto }}</li>
        </ul>
    </div>
</section>