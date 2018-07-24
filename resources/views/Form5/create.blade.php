@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Completar Formulario(Review)</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/Form5/'.$form5->id, 'method'=>'POST']) !!}
		<div class="form-group">
			 <div class="form-group{{ $errors->has('id_info') ? ' has-error' : '' }}">
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Selecciona el titulo de tu articulo  '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
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
			<div class="form-group{{ $errors->has('Tema1','Tema2','Tema3','Tema4') ? ' has-error' : '' }}">
			
				{{Form::select('Tema1', [ 'Demand Forecast' => 'Demand Forecast', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP' => 'GEP', 'Indicators' => 'Indicators',  'Market' => 'Market', 'Other' => 'Other', 'Policies' => 'Policies', 'RenEne' => 'RenEne', 'TEP'=> 'TEP', 'Tools' => 'Tools'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema1 '] )}}
					@if ($errors->has('Tema1'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema1') }}</strong>
	                    </small>
	                @endif

				{{Form::select('Tema2', [ 'Demand Forecast' => 'Demand Forecast', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP' => 'GEP', 'Indicators' => 'Indicators',  'Market' => 'Market', 'Other' => 'Other', 'Policies' => 'Policies', 'RenEne' => 'RenEne', 'TEP'=> 'TEP', 'Tools' => 'Tools'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema2 '] )}}
					@if ($errors->has('Tema2'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema2') }}</strong>
	                    </small>
	                @endif

	            {{Form::select('Tema3', [ 'Demand Forecast' => 'Demand Forecast', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP' => 'GEP', 'Indicators' => 'Indicators',  'Market' => 'Market', 'Other' => 'Other', 'Policies' => 'Policies', 'RenEne' => 'RenEne', 'TEP'=> 'TEP', 'Tools' => 'Tools'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema3 '] )}}
					@if ($errors->has('Tema3'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema3') }}</strong>
	                    </small>
	                @endif
	            {{Form::select('Tema4', [ 'Demand Forecast' => 'Demand Forecast', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP' => 'GEP', 'Indicators' => 'Indicators',  'Market' => 'Market', 'Other' => 'Other', 'Policies' => 'Policies', 'RenEne' => 'RenEne', 'TEP'=> 'TEP', 'Tools' => 'Tools'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema4 '] )}}
					@if ($errors->has('Tema4'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema4') }}</strong>
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
        	
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection