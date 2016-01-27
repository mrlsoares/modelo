@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Produtos</h1>
            <a href="{{route('produtos.create')}}" class="btn btn-default">Novo Produto</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td><a href="{{route('produtos.edit',['id'=>$produto->id]) }}" class="btn btn-success">Editar</a>
                            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="{{route('produtos.destroy',['id'=>$produto->id])}}" class="btn btn-danger">Excluir</a></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection