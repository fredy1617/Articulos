@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Completar Formulario(Report)</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/form4/'.$form4->id, 'method'=>'POST']) !!}
		<div class="form-group">
			 <div class="form-group{{ $errors->has('id_info') ? ' has-error' : '' }}">
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Titulo '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
	                    </small>
	                @endif
	        </div>
			<div class="form-group{{ $errors->has('Country') ? ' has-error' : '' }}">
	            {{Form::text('Country', $form4->Country, ['class'=>'form-control', 'placeholder'=>'Country'])}}
	                @if ($errors->has('Country'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Country') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Focus') ? ' has-error' : '' }}">
	            {{Form::text('Focus', $form4->Focus, ['class'=>'form-control', 'placeholder'=>'Focus '])}}
	                @if ($errors->has('Focus'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Focus') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Agency') ? ' has-error' : '' }}">
	            {{Form::text('Agency', $form4->Agency, ['class'=>'form-control', 'placeholder'=>'Agency '])}}
	                @if ($errors->has('Agency'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Agency') }}</strong>
	                    </small>
	                @endif
        	</div>
     
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/'.$form4->id_info.'/edit')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection