@extends('layout.admin')

@section('title', 'Categoria | Confeitaria Dashboard')
@section('pg-titulo', 'categoria')
@section('link-topo', 'categoria')

@section('content')
<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Gerenciamento de Categorias</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalNovaCategoria">
                                <i class="bi bi-plus-circle"></i>
                                Nova Categoria
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 40px">Ordem</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th style="width: 200px">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categorias as $linha)
                                <tr class="align-middle">
                                    <td>{{ $linha->ordem_categoria }}</td>
                                    <td>{{ $linha->nome_categoria }}</td>
                                    <td>{{ $linha->descricao_categoria }}</td>
                                    <td>
                                        {{-- Pequena correção ortográfica: de sucess para success --}}
                                        @if($linha->status_categoria === 'ATIVO')
                                            <span class="badge text-bg-success">Ativo</span>
                                        @else
                                            <span class="badge text-bg-danger">Inativo</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditarCategoria{{ $linha->id_categoria }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                    <form action="{{ route('admin.categoria.desativar', $linha->id.categoria) }}"
                                    method="post">
                                    @csrf
                                    @method('PATCH')
                                        <button type="button" class="btn btn-danger">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Nenhuma categoria cadastrada</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                </div>
        </div>
        </div>
    </div>
@include('admin.categoria.modal.create')

@endsection