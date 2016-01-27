@extends('app')

<link rel="stylesheet" href="{{asset('assets/css/skins/tn3/tn3.css')}}">
@section('content')
	<div class="container">

        <div id="content">
            <div class="mygallery">
                <div class="tn3 album">
                    <ol>
                        @if(count($imagens)>0)
                            @foreach($imagens as $imagem)
                                <li>
                                    <a href="{!! asset('/albuns/'.$produto['id'].'/'.$imagem) !!}" title="" data-gallery>
                                        <img  class="img-thumbnail" src="{!! asset('/albuns/'.$produto['id'].'/'.$imagem) !!}" />
                                    </a>

                                </li>
                            @endforeach
                        @endif
                    </ol>
                </div>
            </div>
        </div>
	</div>

@endsection
@section('post-script')
<script type="text/javascript">
    $(document).ready(function() {
        //Thumbnailer.config.shaderOpacity = 1;
        var tn1 = $('.mygallery').tn3({
            skinDir:"skins",
            imageClick:"fullscreen",
            image:{
                maxZoom:4,
                crop:true,
                clickEvent:"dblclick",
                transitions:[{
                    type:"blinds"
                },{
                    type:"grid"
                },{
                    type:"grid",
                    duration:460,
                    easing:"easeInQuad",
                    gridX:1,
                    gridY:8,
// flat, diagonal, circle, random
                    sort:"random",
                    sortReverse:false,
                    diagonalStart:"bl",
// fade, scale
                    method:"scale",
                    partDuration:360,
                    partEasing:"easeOutSine",
                    partDirection:"left"
                }]
            }
        });
    });
</script>
@endsection