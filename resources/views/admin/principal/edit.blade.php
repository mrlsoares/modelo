@extends('admin.index')


@section('content')
    <div class="container">
        <div class="col-xs-8">
            <h1>Editar Configurações </h1>
            @if($errors->any())
                <ul class="alert alert-warning">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::open(['route'=>['admin.principal.update',$principal->id],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('titulo','Título') !!}
                {!! Form::text('titulo',$principal->titulo,['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('conteudo','Conteúdo:') !!}
                {!! Form::textarea('conteudo',$principal->conteudo,['class'=>'textarea']) !!}
            </div>
            <div class="form-group">

                {!! Form::submit('Gravar',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
