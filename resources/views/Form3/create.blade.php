@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Completar Formulario(Energy Sourse)</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/form3/'.$form3->id, 'method'=>'POST']) !!}
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
	            {{Form::text('Country', $form3->Country, ['class'=>'form-control', 'placeholder'=>'Country'])}}
	                @if ($errors->has('Country'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Country') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Focus') ? ' has-error' : '' }}">
	            {{Form::text('Focus', $form3->Focus, ['class'=>'form-control', 'placeholder'=>'Focus '])}}
	                @if ($errors->has('Focus'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Focus') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Tecnology') ? ' has-error' : '' }}">
	            {{Form::text('Tecnology', $form3->Tecnology, ['class'=>'form-control', 'placeholder'=>'Tecnology '])}}
	                @if ($errors->has('Tecnology'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tecnology') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Economic') ? ' has-error' : '' }}">
	            {{Form::text('Economic', $form3->Economic, ['class'=>'form-control', 'placeholder'=>'Economic '])}}
	                @if ($errors->has('Economic'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Economic') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Environment') ? ' has-error' : '' }}">
	            {{Form::text('Environment', $form3->Environment, ['class'=>'form-control', 'placeholder'=>'Environment '])}}
	                @if ($errors->has('Environment'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Environment') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Social') ? ' has-error' : '' }}">
	            {{Form::text('Social', $form3->Social, ['class'=>'form-control', 'placeholder'=>'Social '])}}
	                @if ($errors->has('Social'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Social') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Other') ? ' has-error' : '' }}">
	            {{Form::text('Other', $form3->Other, ['class'=>'form-control', 'placeholder'=>'Other '])}}
	                @if ($errors->has('Other'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Other') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Keyboard') ? ' has-error' : '' }}">
	            {{Form::text('Keyboard', $form3->Keyboard, ['class'=>'form-control', 'placeholder'=>'Keyboard '])}}
	                @if ($errors->has('Keyboard'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Keyboard') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Abstract') ? ' has-error' : '' }}">
	            {{Form::text('Abstract', $form3->Abstract, ['class'=>'form-control', 'placeholder'=>'Abstract'])}}
	                @if ($errors->has('Abstract'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Abstract') }}</strong>
	                    </small>
	                @endif
        	</div>


			
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/'.$form3->id_info.'/edit')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection