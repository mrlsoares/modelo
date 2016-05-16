
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Colt Photos</a>
            </div>

            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="menu_letras" href="{{ url('/')}}">Home</a></li>
                    <li><a class="menu_letras" href="{{url('/home/3')}}">Empresa</a></li>
                    <li><a class="menu_letras" href="{{url('/album')}}">Albuns</a></li>
                    <li><a class="menu_letras" href="{{url('/contato')}}">Contato</a></li>
                    <li><a class="menu_letras"href="{{ url('/home/2')}}">Localização</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if(auth()->guest())
                        @if(!Request::is('auth/login'))
                            <li><a class="menu_letras" href="{{url('/auth/login') }}">Login</a></li>
                        @endif
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }}<span class="caret"></span>&nbsp;&nbsp;&nbsp;&nbsp; </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="menu_letras" href="{{ url('/admin/home') }}">AREA ADMINISTRATIVA</a></li>
                                <li><a class="menu_letras" href="{{ url('/auth/logout') }}">SAIR</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>