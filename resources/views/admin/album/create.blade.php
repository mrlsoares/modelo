@extends('admin.index')


@section('content')
    <div class="container">
        <h1>Novo Album</h1>
        @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(array('route' => 'admin.albuns.store', 'class' => 'form','files' => true)) !!}

        <div class="form-group">
            {!! Form::label('Nome') !!}
            {!! Form::text('titulo', null, array('placeholder'=>'Digite aqui Nome do Album')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Capa') !!}
            {!! Form::file('capa', null) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Gravar!') !!}
        </div>
        {!! Form::close() !!}
    </div>


@endsection