@extends('admin.index')
@section('content')

    <div class="container">
        <div class="row">
            <h1>Galeria de Imagens</h1>
            <a href="{{route('admin.albuns.index')}}" class="btn btn-info">Albuns</a>
        </div>
        @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <br/>
        {!! Form::open(['route'=>['admin.albuns.galeria.store',$album['id']],'method'=>'POST','files'=>true]) !!}
        <div class="control-group">
            <div class="controls">
                {!! Form::file('images[]', array('multiple'=>true)) !!}
                <br>
                {!!  Form::hidden('album_id',$album['id']) !!}
            </div>
        </div>
        {!! Form::submit('Enviar', array('class'=>'btn btn-primary')) !!}
        {!! Form::close() !!}
        <div class="row">
            <br/>
            <div class="col-xs-4">
                <table>
                    <table class="table table-bordered table-striped table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Arquivo</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($imagens)>1)

                            @foreach($imagens as $imagem)
                                <tr>
                                    <td>
                                        <img width="100" class="img-thumbnail" src="{!! asset('/albuns/'.$album['id'].'/'.$imagem)  !!}"/>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.albuns.galeria.destroy',['id'=>$album['id'],'arquivo'=>$imagem])}}" class="btn btn-danger">Excluir</a>
                                    </td>
                                </tr>

                            @endforeach
                        @else
                            <tr >
                                <td colspan="2">
                                    ainda não tem nenhuma imagem!
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </table>
            </div>
        </div>

    </div>

@endsection