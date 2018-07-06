@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Completar Formulario(Review)</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/form5/'.$form5->id, 'method'=>'POST']) !!}
		<div class="form-group">
			 <div class="form-group{{ $errors->has('id_info') ? ' has-error' : '' }}">
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Titulo '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
	                    </small>
	                @endif
	        </div>
			
        	<div class="form-group{{ $errors->has('Focus') ? ' has-error' : '' }}">
	            {{Form::text('Focus', $form5->Focus, ['class'=>'form-control', 'placeholder'=>'Focus '])}}
	                @if ($errors->has('Focus'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Focus') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Methodology') ? ' has-error' : '' }}">
	            {{Form::text('Methodology', $form5->Methodology, ['class'=>'form-control', 'placeholder'=>'Methodology '])}}
	                @if ($errors->has('Methodology'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Methodology') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Models') ? ' has-error' : '' }}">
	            {{Form::text('Models', $form5->ModelsModels, ['class'=>'form-control', 'placeholder'=>'Models '])}}
	                @if ($errors->has('Models'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Models') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Solvers') ? ' has-error' : '' }}">
	            {{Form::text('Solvers', $form5->Solvers, ['class'=>'form-control', 'placeholder'=>'Solvers '])}}
	                @if ($errors->has('Solvers'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Solvers') }}</strong>
	                    </small>
	                @endif
        	</div>
        	
        	<div class="form-group{{ $errors->has('Keyboard') ? ' has-error' : '' }}">
	            {{Form::text('Keyboard', $form5->Keyboard, ['class'=>'form-control', 'placeholder'=>'Keyboard '])}}
	                @if ($errors->has('Keyboard'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Keyboard') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Abstract') ? ' has-error' : '' }}">
	            {{Form::text('Abstract', $form5->Abstract, ['class'=>'form-control', 'placeholder'=>'Abstract'])}}
	                @if ($errors->has('Abstract'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Abstract') }}</strong>
	                    </small>
	                @endif
        	</div>


			
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/'.$form5->id_info.'/edit')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection