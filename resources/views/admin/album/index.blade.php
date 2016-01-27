@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
            <h1>albuns</h1>
            <a href="{{route('admin.albuns.create')}}" class="btn btn-default">Novo Album</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Capa</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($albuns as $album)
                    <tr>
                        <td>{{$album->id}}</td>
                        <td>{{$album->titulo}}</td>
                        <td width="110">

                            <img width="100" class="thumbnail" src="{!!  asset('/albuns/'.$album->id.'.'.$album->extensao) !!}"/>
                        </td>
                        <td width="25%">
                        <a href="{{route('admin.albuns.edit',['id'=>$album->id]) }}" class="btn btn-success">Editar</a>
                            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="{{route('admin.albuns.destroy',['id'=>$album->id])}}" class="btn btn-danger">Excluir</a>
                            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="{{route('admin.albuns.galeria',['id'=>$album->id])}}" class="btn btn-info">Galeria</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

            {!! $albuns->render() !!}
        </div>
    </div>
@endsection