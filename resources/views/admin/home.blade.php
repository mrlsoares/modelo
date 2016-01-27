@extends('admin.index')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        <script language=javascript type="text/javascript">
                            now = new Date
                            if (now.getHours () >= 0 && now.getHours () < 5)
                            {document.write ("Boa Noite,  ")}
                            else if (now.getHours () >= 5 && now.getHours () < 12)
                            {document.write ("Bom Dia,    ") }
                            else if (now.getHours () >= 12 && now.getHours () < 18)
                            {document.write ("Boa Tarde,  ") }
                            else
                            {document.write ("Boa Noite,  ") }
                        </script>
                        {{ auth()->user()->name }} você está logado na area administrativa do site
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection