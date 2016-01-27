<!DOCTYPE html>
<html lang="en">
<head>
    @inject('config','App\Entities\Config')

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{$config->find(1)->palavras_chave}}">
    <meta name="description" content=" Mescla Foto Cabine -A Cabine de Fotos é uma forma divertida de você e seus convidados  terem uma lembrança do evento">
	<title>{{$config->titulo}}</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	 <link href="{{asset('/assets/css/junior.min.css')}}" rel="stylesheet"/>


	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <style>
        .menu_letras
        {
            font-family: 'Muli', sans-serif;

        }

        .altura_topo{height: 150px;}
        .altura_meio{height: 20px;}
        .branco{color: #fff;}


    </style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

    <div class="row">
        <div class="container">
            @include('topo')
        </div>
    </div>
    <div class="altura_topo"></div>
    <div class="row">
        <div class="container">
            @include('menu')
        </div>
    </div>
    <div class="altura_meio"></div>
    <div class="row">
        <div class="container ">
	        @yield('content')
        </div>
    </div>
    <div class="altura_topo"></div>
    <div class="row">
        <div class="container ">
            @include('rodape')
        </div>
    </div>


	<!-- Scripts
	 <script src="{{asset('assets/js/bootstrap-image-gallery.min.js')}}"></script>
	 -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="{{asset('assets/js/jquery.tn3lite.min.js')}}"></script>
    @yield('post-script')
</body>
</html>
