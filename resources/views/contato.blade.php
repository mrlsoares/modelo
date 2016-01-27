@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

                        {!! $mensagem !!}

                        @if($errors->any())
                            <ul class="alert alert-warning">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(array('route' => 'contato', 'class' => 'form')) !!}

                        <div class="form-group row">
                            {!! Form::label('Nome',null,array('class' => 'col-sm-1 control-label')) !!}
                            <div class="col-md-4">
                            {!! Form::text('nome', null, array('class' => 'form-control','required')) !!}
                            </div>
                        </div>
                            <div class="form-group row">
                                {!! Form::label('E-mail',null,array('class' => 'col-sm-1 control-label')) !!}
                                <div class="col-md-4">
                                {!! Form::email('email', null, array('class' => 'form-control','required')) !!}
                                 </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('Telefone',null,array('class' => 'col-sm-1 control-label')) !!}
                                <div class="col-md-4">
                                {!! Form::text('telefone', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('Mensagem',null,array('class' => 'col-sm-1 control-label')) !!}
                                {!! Form::hidden('orcamento','orcamento') !!}
                                <div class="col-md-4">
                                    {!! Form::textarea('mensagem', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>



                        <div class="form-group row">
                            {!! Form::submit('Enviar!',array('class' => 'btn btn-default')) !!}
                        </div>
                        {!! Form::close() !!}
                        {!! $mensagem !!}

			</div>
		</div>
	</div>
@endsection




