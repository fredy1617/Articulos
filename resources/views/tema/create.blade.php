@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Agregar Temas</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/tema/'.$tema->id, 'method'=>'POST']) !!}
		<div class="form-group">
			 <div class="form-group{{ $errors->has('id_info') ? ' has-error' : '' }}">
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Titulo '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
	                    </small>
	                @endif
	        </div>
			<div class="form-group{{ $errors->has('tema1') ? ' has-error' : '' }}">
				{{Form::select('tema1', $lista, null, ['class'=>'form-control', 'placeholder'=>'Tema 1'] )}}
					@if ($errors->has('tema1'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('tema1') }}</strong>
	                    </small>
	                @endif
	        </div>
        	<div class="form-group{{ $errors->has('tema2') ? ' has-error' : '' }}">
				{{Form::select('tema2', $lista, null, ['class'=>'form-control', 'placeholder'=>'Tema 2'] )}}
					@if ($errors->has('tema2'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('tema2') }}</strong>
	                    </small>
	                @endif
	        </div>
        	<div class="form-group{{ $errors->has('tema3') ? ' has-error' : '' }}">
				{{Form::select('tema3', $lista, null, ['class'=>'form-control', 'placeholder'=>'Tema 3'] )}}
					@if ($errors->has('tema3'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('tema3') }}</strong>
	                    </small>
	                @endif
	        </div>
        	<div class="form-group{{ $errors->has('tema4') ? ' has-error' : '' }}">
				{{Form::select('tema4', $lista, null, ['class'=>'form-control', 'placeholder'=>'Tema 4'] )}}
					@if ($errors->has('tema4'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('tema4') }}</strong>
	                    </small>
	                @endif
	        </div>
        	<div class="form-group{{ $errors->has('tema5') ? ' has-error' : '' }}">
				{{Form::select('tema5', $lista, null, ['class'=>'form-control', 'placeholder'=>'Tema 5'] )}}
					@if ($errors->has('tema5'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('tema5') }}</strong>
	                    </small>
	                @endif
	        </div>
			
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/'.$tema->id_info.'/edit')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection