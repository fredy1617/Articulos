@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
	<h1>Autores</h1>
</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Articulo</td>
				<td>Autor1</td>
				<td>Autor2</td>
				<td>Autor3</td>
				<td>Autor4</td>
				<td>Autor5</td>

			</tr>
		</thead>
		<tbody>
			@foreach ($autor as $autores)
			<tr>
				<td>{{ $autores->id_info}}</td>
				<td>{{ $autores->Apellido_1.' '.$autores->Nombre_1}}</td>
				<td>{{ $autores->Apellido_2.' '.$autores->Nombre_2}}</td>
				<td>{{ $autores->Apellido_3.' '.$autores->Nombre_3}}</td>
				<td>{{ $autores->Apellido_4.' '.$autores->Nombre_4}}</td>
				<td>{{ $autores->Apellido_5.' '.$autores->Nombre_5}}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection