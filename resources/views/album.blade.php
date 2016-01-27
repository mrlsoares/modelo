@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
						@if(count($produtos)>0)
							@foreach($produtos as $produto)
								<div class="col-md-4">
									<a href="{{route('albuns.galeria',['id'=>$produto->id]) }}" >
										<img  class="img-thumbnail" src="{!! asset('/albuns/'.$produto->id.'.'.$produto->extensao) !!}" />
									</a>
								</div>
							@endforeach

						@endif
							{!! $produtos->render() !!}
			</div>
		</div>
	</div>

@endsection