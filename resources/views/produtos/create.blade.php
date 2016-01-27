@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Produto</h1>
        @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route'=>'produtos.store']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome') !!}
            {!! Form::text('nome',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('descricao','Descrição:') !!}
            {!! Form::textarea('descricao',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">

            {!! Form::submit('Gravar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@endsection