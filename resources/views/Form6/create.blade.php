@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Completar Formulario(Report)</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/form6/'.$form6->id, 'method'=>'POST']) !!}
		<div class="form-group">
			 <div class="form-group{{ $errors->has('id_info') ? ' has-error' : '' }}">
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Titulo '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
	                    </small>
	                @endif
	        </div>
			
        	<div class="form-group{{ $errors->has('Algorithms_Tecnologies') ? ' has-error' : '' }}">
	            {{Form::text('Algorithms_Tecnologies', $form6->Algorithms_Tecnologies, ['class'=>'form-control', 'placeholder'=>'Algorithms/Tecnologies '])}}
	                @if ($errors->has('Algorithms_Tecnologies'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Algorithms_Tecnologies') }}</strong>
	                    </small>
	                @endif
        	</div>
     
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/'.$form6->id_info.'/edit')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection