@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
	<h1>Articulos</h1>
</div>
<a class="btn btn-outline-success" href="{{url('/autor/create')}}" role="button">Agregar Autores</a>

<a class="btn btn-outline-success" href="{{url('/tema/'.$base->id.'/edit')}}" role="button">Agregar Temas</a>
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
				<td>Temas </td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				
				<td>{{ Form::label('', $base->titulo) }}</td>
				<td>{{ Form::label('', $base->id) }}</td>
				<td>{{ Form::label('', $base->año) }}</td>
				<td>{{ Form::label('', $base->id_revista) }}</td>
				<td>{{ Form::label('', $base->tipo) }}</td>
				<td>{{ Form::label('', $base->id) }}</td>
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url($ruta)}}">Completar</a>
					
				</td>
			</tr>
	</table>
	{!! Form::close() !!}
</div>


@endsection