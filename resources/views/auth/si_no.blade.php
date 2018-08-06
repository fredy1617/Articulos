@extends('layouts.app')
<br>
<br>
<br>
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Peticion de permiso.</h2></div>
                <hr>
                <div class="panel-body">
                    {!! Form::open(['url'=> '/si-no/'.$id, 'method'=>'POST']) !!}
                    <div class="form-group{{ $errors->has('activate') ? ' has-error' : '' }}">
	            	<h5>
	            	El usuario <b>{{$nombre}}</b> con correo <b>{{$correo}}</b> <br>
	            	Desea obtener permiso para ingresar <b>Aceptar</b>

              		{{ Form::checkbox('activate', 1) }}
	               	 @if ($errors->has('activate'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('activate') }}</strong>
	                    </small>
	             	@endif
	             	</h5>
	             </div>
	             <div class="form-group text-right">
					<input type="submit"  value="Enviar" class="btn btn-success">
				 </div>
				 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection