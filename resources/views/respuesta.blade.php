@extends('layouts.app')
<br>
<br>
<br>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Hola para continuar..</h2></div>
                <hr>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5>
                    Se ha enviado un mensaje a tu correo electrónico<br>
                    para contnuar con tu proceso de registro, deberás <br>
                    ingresar y dar clic sobre el link que se te envió.<br>
                </h5>
                </div>
                <a type="button" class="btn btn-outline-info" href="{{url('/')}}">Ok</a>
            </div>
        </div>
    </div>
</div>
@endsection
