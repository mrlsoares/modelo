@extends('admin.index')

@section('content')
    <div class="container">
        <div class="col-xs-4">
            <h1>Editar Configurações </h1>
            @if($errors->any())
                <ul class="alert alert-warning">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::open(['route'=>['admin.config.update',$config->id],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('titulo','Título') !!}
                {!! Form::text('titulo',$config->titulo,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::text('email',$config->email,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('fan_page','Instagram') !!}
                {!! Form::text('fan_page',$config->fan_page,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('facebook','Facebook') !!}
                {!! Form::text('facebook',$config->facebook,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('twitter','Twitter') !!}
                {!! Form::text('twitter',$config->twitter,['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('skype','Skype:') !!}
                {!! Form::text('skype',$config->skype,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lkdn','lkdn:') !!}
                {!! Form::text('lkdn',$config->lkdn,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('fone','fone:') !!}
                {!! Form::text('fone',$config->fone,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('endereco','endereco:') !!}
                {!! Form::text('endereco',$config->endereco,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('palavras_chave','Palavras Chave:') !!}
                {!! Form::textarea('palavras_chave',$config->palavras_chave,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">

                {!! Form::submit('Gravar',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection