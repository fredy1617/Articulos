@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Agregar Autores</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/autor/'.$autor->id, 'method'=>'POST']) !!}
		<div class="form-group">
			 <div class="form-group{{ $errors->has('id_info') ? ' has-error' : '' }}">
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Titulo '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
	                    </small>
	                @endif
	        </div>
			<div class="form-group{{ $errors->has('autor1') ? ' has-error' : '' }}">
	            {{Form::text('autor1', $autor->autor1, ['class'=>'form-control', 'placeholder'=>'Autor 1'])}}
	                @if ($errors->has('autor1'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('autor1') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('autor2') ? ' has-error' : '' }}">
	            {{Form::text('autor2', $autor->autor2, ['class'=>'form-control', 'placeholder'=>'Autor 2: '])}}
	                @if ($errors->has('autor2'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('autor2') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('autor3') ? ' has-error' : '' }}">
	            {{Form::text('autor3', $autor->autor3, ['class'=>'form-control', 'placeholder'=>'Autor 3: '])}}
	                @if ($errors->has('autor3'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('autor3') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('autor4') ? ' has-error' : '' }}">
	            {{Form::text('autor4', $autor->autor4, ['class'=>'form-control', 'placeholder'=>'Autor 4: '])}}
	                @if ($errors->has('autor4'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('autor4') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('autor5') ? ' has-error' : '' }}">
	            {{Form::text('autor5', $autor->autor5, ['class'=>'form-control', 'placeholder'=>'Autor 5: '])}}
	                @if ($errors->has('autor5'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('autor5') }}</strong>
	                    </small>
	                @endif
        	</div>
			
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/'.$autor->id_info.'/edit')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection