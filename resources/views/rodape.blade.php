<div class="row-fluid menu_letras" >

        <div class="navbar navbar-default">
            <div class="col-xs-7 col-sm-7 col-lg-5">
                <h4 class="line3 center standart-h4title"><span>Contato</span></h4>
                <p> Email:  {{$config->find(1)->email}} </p>
                <p> Fone: {{$config->find(1)->fone}}   </p>
                <p>{{$config->find(1)->endereco}}</p>
            </div>

            <div class="col-xs-2 col-sm-2 col-lg-2">

                <h4 class="line3 center standart-h4title"><span>Navigação</span></h4>
                <div class="footer-links">
                    <a href="/" class="branco">Home</a><br/>
                    <a href="{{url('/home/2')}}" class="branco">Localização</a><br/>
                    <a href="{{url('/album')}}"class="branco">Galeria de Fotos</a><br/>
                    <a href="{{url('/home/3')}}" class="branco">Sobre</a><br/>
                    <a href="{{url('/contato')}}" class="branco">Contato</a><br/>
                    @if(auth()->guest())
                        @if(!Request::is('auth/login'))

                            <a href="{{url('/auth/login') }}" class="branco">Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        @endif
                    @endif
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-lg-2">
            </div>
            <div class="col-xs-3 col-sm-3 col-lg-3">
                <h4 class="line3 center standart-h4title"><span>Rede Social</span></h4>
                <br/>
                <a class="facebook" href="{{$config->find(1)->facebook}}" target="_blank">
                    <img width="35" src="{{asset('/assets/img/facebook.png')}}">
                </a>
                <a class="facebook" href="{{$config->find(1)->fan_page}}" target="_blank">
                    <img width="31" src="{{asset('/assets/img/instagram.png')}}">
                </a>
            </div>

        </div>
        </div>
</div>