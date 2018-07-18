@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
	<h1>Articulos</h1>
</div>
<div class="container">
	{!! Form::open(['url'=> '/infobase/'.$base->id, 'method'=>'PATCH']) !!}
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Titulo</td>
				<td>Autores</td>
				<td>Año</td>
				<td>Revista</td>
				<td>Tipo </td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				
				<td>{{ Form::label('', $base->titulo) }}</td>
				<td>{{ Form::label('', $base->id) }}</td>
				<td>{{ Form::label('', $base->year) }}</td>
				<td>{{ Form::label('', $base->id_revista) }}</td>
				<td>{{Form::select('tipo', ['' => $base->tipo, 'Application' => 'Application', 'Energy Source' => 'Energy Source', 'Report' => 'Report', 'Review' => 'Review', 'Theorist' => 'Theorist', 'Tool' => 'Tool'], $base->tipo, ['class'=>'form-control'])}}</td>
			
				@if ($base->tipo!="Pending")
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url($ruta)}}">Completar</a>
					
				</td>
				@endif
			</tr>
	</table>

		<div class="form-group text-right">
			<a href="{{url('/infobase')}}">Regresar al listado de articulos</a>
			<input type="submit" value="Guardar" class="btn btn-outline-success">
		</div>
	{!! Form::close() !!}
</div>


@endsection