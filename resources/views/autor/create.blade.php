@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")

    	{!! Form::open(['url'=> '/saveautor/'.$id, 'method'=>'POST']) !!}
	<div class="container white">
		<h1>Aurores</h1><br>
        	<h3>Autor 1</h3>
	        <div class="form-group{{$errors->has('Nombre_1','Apellido_1') ? ' has-error' : '' }}">
	            {{Form::text('Nombre_1', $autor->Nombre_1, ['class'=>'form-control', 'placeholder'=>'Nombre'])}}
	                @if ($errors->has('Nombre_1'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Nombre_1') }}</strong>
	                    </small>
	                @endif
	            {{Form::text('Apellido_1', $autor->Apellido_1, ['class'=>'form-control', 'placeholder'=>'Apellido '])}}
	                @if ($errors->has('Apellido_1'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Apellido_1') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<h3>Autor 2</h3>
	        <div class="form-group{{$errors->has('Nombre_2','Apellido_2') ? ' has-error' : '' }}">
	            {{Form::text('Nombre_2', $autor->Nombre_1, ['class'=>'form-control', 'placeholder'=>'Nombre'])}}
	                @if ($errors->has('Nombre_2'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Nombre_2') }}</strong>
	                    </small>
	                @endif
	            {{Form::text('Apellido_2', $autor->Apellido_2, ['class'=>'form-control', 'placeholder'=>'Apellido '])}}
	                @if ($errors->has('Apellido_2'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Apellido_2') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<h3>Autor 3</h3>
	        <div class="form-group{{$errors->has('Nombre_3','Apellido_3') ? ' has-error' : '' }}">
	            {{Form::text('Nombre_3', $autor->Nombre_3, ['class'=>'form-control', 'placeholder'=>'Nombre'])}}
	                @if ($errors->has('Nombre_3'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Nombre_3') }}</strong>
	                    </small>
	                @endif
	            {{Form::text('Apellido_3', $autor->Apellido_3, ['class'=>'form-control', 'placeholder'=>'Apellido '])}}
	                @if ($errors->has('Apellido_3'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Apellido_3') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<h3>Autor 4</h3>
	        <div class="form-group{{$errors->has('Nombre_4','Apellido_4') ? ' has-error' : '' }}">
	            {{Form::text('Nombre_4', $autor->Nombre_4, ['class'=>'form-control', 'placeholder'=>'Nombre'])}}
	                @if ($errors->has('Nombre_4'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Nombre_4') }}</strong>
	                    </small>
	                @endif
	            {{Form::text('Apellido_4', $autor->Apellido_4, ['class'=>'form-control', 'placeholder'=>'Apellido '])}}
	                @if ($errors->has('Apellido_4'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Apellido_4') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<h3>Autor 5</h3>
	        <div class="form-group{{$errors->has('Nombre_5','Apellido_5') ? ' has-error' : '' }}">
	            {{Form::text('Nombre_5', $autor->Nombre_5, ['class'=>'form-control', 'placeholder'=>'Nombre'])}}
	                @if ($errors->has('Nombre_5'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Nombre_5') }}</strong>
	                    </small>
	                @endif
	            {{Form::text('Apellido_5', $autor->Apellido_5, ['class'=>'form-control', 'placeholder'=>'Apellido '])}}
	                @if ($errors->has('Apellido_5'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Apellido_5') }}</strong>
	                    </small>
	                @endif
        	</div>

		<div class="form-group text-right">
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}

	</div>
@endsection