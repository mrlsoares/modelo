<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Area Administrativa</title>


    <link href="{{asset('/assets/css/app_supernice.css')}}" rel="stylesheet"/>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<br><br>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Area Administrativa</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/admin/config/1/edit')}}">Config</a></li>
                        <li><a href="{{url('/admin/principal/1/edit')}}">Página inicio</a></li>
                        <li><a href="{{url('/admin/principal/2/edit')}}">Localização</a></li>
                        <li><a href="{{url('/admin/principal/3/edit')}}">A Empresa</a></li>

                        <li><a href="{{url('/admin/albuns')}}">Albuns</a></li>
                        <li class="divider" role="separator"></li>

                        <li><a href="{{ url('/auth/logout') }}">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>



@yield('content')


<footer>
    <div class="container">
    Todos os direitos Reservados!
    </div>
</footer>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    //config.filebrowserBrowseUrl = '/elfinder/ckeditor';
    CKEDITOR.replace( 'conteudo'// {

        //filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        //filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        //filebrowserWindowWidth: '1000',
        //filebrowserWindowHeight: '700'
    //}
    );
</script>
</body>
</html>
