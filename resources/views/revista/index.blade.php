@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
	<h1>Articulos</h1>
</div>
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			@foreach ($base as $bases)
			<tr>
				<td>{{ $bases->id}}</td>
				<td>{{ $bases->nombre}}</td>
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url('#')}}">Mas</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection