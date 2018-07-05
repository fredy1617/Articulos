@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Completar Informacion</h1>
		
		<!--formulario-->
			{!! Form::open(['url'=> '/base/'.$base->id, 'method'=>'PATCH']) !!}
		
		<div class="container">
	<table class="table table-striped">
		<thead>
			<td>
				<tr>ID</tr>
				<tr>Revista</tr>
				<tr>Acciones</tr>
			</td>
		</thead>
		<tbody>
			@foreach ($revistas as $revista)
			<tr>
				<td>{{ $revista->id }}</td>
				<td>{{ $revista->nombre }}</td>
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url('/revista/'.$revista->id.'/edit')}}">Editar</a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
			{!! Form::close() !!}

	</div>

@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Revistas</h1>
</div>
<a class="btn btn-outline-success" href="{{url('/revista/create')}}" role="button">Agregar</a>


@endsection