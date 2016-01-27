@extends('admin.index')


@section('content')
    <div class="container">
        <h1>Editar album {{$album->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>['admin.albuns.update',$album->id],'method'=>'put','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('Nome') !!}
            {!! Form::text('titulo', $album->titulo, array('placeholder'=>'Digite aqui Nome do Album')) !!}
        </div>

        <div class="form-group">
            <img width="150" src="{{asset('/albuns/'.$album->id.'.'.$album->extensao)}}"/>
            {!! Form::label('Capa') !!}
            {!! Form::file('capa') !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Gravar!') !!}
        </div>
        {!! Form::close() !!}
    </div>

@endsection