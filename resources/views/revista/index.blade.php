@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
	<h1>Revistas</h1>
</div>
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($base as $bases)
			<tr>
				<td>{{ $bases->id}}</td>
				<td>{{ $bases->nombre}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection