@extends('layouts.app')
<br>
<br>
<br>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Registro terminado.</h2></div>
                <hr>
                <h5>
                    Has terminado con tu registro, por el momento no podrás<br>
                    acceder al sistema hasta que tu cuenta sea activada, <br>
                    espera un periodo de 24 horas para que los datos de tu<br>
                    cuenta sean evaluados y validados, de esta forma podrás<br>
                    acceder al sistema.
                    </h5>
                </div>
                <a type="button" class="btn btn-outline-info" href="{{url('/')}}">Ok</a>
            </div>
        </div>
    </div>
</div>
@endsection