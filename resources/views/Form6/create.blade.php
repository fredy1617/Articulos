@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Completar Formulario(Theorist)</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/saveform6/'.$base->id, 'method'=>'POST']) !!}

		<div class="form-group">
		<br>
		<h4>Articulo</h4>
		<div><h5><font color="#eeeeee"><h8>_____</h8></font>
<b>Id:</b> {{ $base->id_Art }}<font color="#eeeeee"><h8>_____</h8></font>
 <b>Título:</b> {{ $base->titulo }}</h5></div>
		<h4>Revista</h4>
		<div><h5><font color="#eeeeee"><h8>_____</h8></font>
<b>Id:</b> {{ $revista->id }}<font color="#eeeeee"><h8>_____</h8></font>
 <b>Título:</b> {{ $revista->nombre }}</h5></div><br>
	        <div class="form-group{{ $errors->has('Keyboard') ? ' has-error' : '' }}">
	            {{Form::text('Keyboard', $form6->Keyboard, ['class'=>'form-control', 'placeholder'=>'Keyboard '])}}
	                @if ($errors->has('Keyboard'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Keyboard') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Abstract') ? ' has-error' : '' }}">
	            {{Form::text('Abstract', $form6->Abstract, ['class'=>'form-control', 'placeholder'=>'Abstract'])}}
	                @if ($errors->has('Abstract'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Abstract') }}</strong>
	                    </small>
	                @endif
        	</div>
			<div class="form-group{{ $errors->has('Tema1','Tema2','Tema3','Tema4') ? ' has-error' : '' }}">
			
				{{Form::select('Tema1', [ 'NSGA - II' => 'NSGA - II', 'SORENSEN' => 'SORENSEN'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema1 '] )}}
					@if ($errors->has('Tema1'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema1') }}</strong>
	                    </small>
	                @endif

				{{Form::select('Tema2', [ 'NSGA - II' => 'NSGA - II', 'SORENSEN' => 'SORENSEN'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema2 '] )}}
					@if ($errors->has('Tema2'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema2') }}</strong>
	                    </small>
	                @endif

	            {{Form::select('Tema3', [ 'NSGA - II' => 'NSGA - II', 'SORENSEN' => 'SORENSEN'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema3 '] )}}
					@if ($errors->has('Tema3'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema3') }}</strong>
	                    </small>
	                @endif
	            {{Form::select('Tema4', [ 'NSGA - II' => 'NSGA - II', 'SORENSEN' => 'SORENSEN'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema4 '] )}}
					@if ($errors->has('Tema4'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema4') }}</strong>
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
			<a href="{{url('/infobase/')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection