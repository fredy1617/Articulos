@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Completar Formulario(Tool)</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/form1/'.$form1->id, 'method'=>'POST']) !!}
		<div class="form-group">
			 <div class="form-group{{ $errors->has('id_info') ? ' has-error' : '' }}">
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Selecciona tu articulo; '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
	                    </small>
	                @endif
	        </div>
			<div class="form-group{{ $errors->has('Tema1','Tema2','Tema3','Tema4') ? ' has-error' : '' }}">
			
				{{Form::select('Tema1', [ 'BALMOREL' => 'BALMOREL', 'MARKAL' => 'MARKAL', 'NETPLAN' => 'NETPLAN', 'OSEMOSYS' => 'OSEMOSYS' ,'TIMES' => 'TIMES'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema1 '] )}}
					@if ($errors->has('Tema1'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema1') }}</strong>
	                    </small>
	                @endif

				{{Form::select('Tema2', [ 'BALMOREL' => 'BALMOREL', 'MARKAL' => 'MARKAL', 'NETPLAN' => 'NETPLAN', 'OSEMOSYS' => 'OSEMOSYS' ,'TIMES' => 'TIMES'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema2 '] )}}
					@if ($errors->has('Tema2'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema2') }}</strong>
	                    </small>
	                @endif

	            {{Form::select('Tema3', [ 'BALMOREL' => 'BALMOREL', 'MARKAL' => 'MARKAL', 'NETPLAN' => 'NETPLAN', 'OSEMOSYS' => 'OSEMOSYS' ,'TIMES' => 'TIMES'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema3 '] )}}
					@if ($errors->has('Tema3'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema3') }}</strong>
	                    </small>
	                @endif
	            {{Form::select('Tema4', [ 'BALMOREL' => 'BALMOREL', 'MARKAL' => 'MARKAL', 'NETPLAN' => 'NETPLAN', 'OSEMOSYS' => 'OSEMOSYS' ,'TIMES' => 'TIMES'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema4 '] )}}
					@if ($errors->has('Tema4'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema4') }}</strong>
	                    </small>
	                @endif
	        </div>
        	<div class="form-group{{ $errors->has('Focus') ? ' has-error' : '' }}">
	            {{Form::text('Focus', $form1->Focus, ['class'=>'form-control', 'placeholder'=>'Focus '])}}
	                @if ($errors->has('Focus'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Focus') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Type') ? ' has-error' : '' }}">
	            {{Form::text('Type', $form1->Type, ['class'=>'form-control', 'placeholder'=>'Type '])}}
	                @if ($errors->has('Type'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Type') }}</strong>
	                    </small>
	                @endif
        	</div>
        	
        	<div class="form-group{{ $errors->has('Agency') ? ' has-error' : '' }}">
	            {{Form::text('Agency', $form1->Agency, ['class'=>'form-control', 'placeholder'=>'Agency '])}}
	                @if ($errors->has('Agency'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Agency') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Open_access') ? ' has-error' : '' }}">
	            {{Form::text('Open_access', $form1->Open_access, ['class'=>'form-control', 'placeholder'=>'Open Access '])}}
	                @if ($errors->has('Open_access'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Open_access') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Parameters') ? ' has-error' : '' }}">
	            {{Form::text('Parameters', $form1->Parameters, ['class'=>'form-control', 'placeholder'=>'Parameters '])}}
	                @if ($errors->has('Parameters'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Parameters') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Keyboard') ? ' has-error' : '' }}">
	            {{Form::text('Keyboard', $form1->Keyboard, ['class'=>'form-control', 'placeholder'=>'Keyboard '])}}
	                @if ($errors->has('Keyboard'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Keyboard') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Abstract') ? ' has-error' : '' }}">
	            {{Form::text('Abstract', $form1->Abstract, ['class'=>'form-control', 'placeholder'=>'Abstract'])}}
	                @if ($errors->has('Abstract'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Abstract') }}</strong>
	                    </small>
	                @endif
        	</div>


			
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/'.$form1->id_info.'/edit')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection