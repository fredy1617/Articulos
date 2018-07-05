@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Proveedores</h1>
</div>
<a class="btn btn-outline-success" href="{{url('/proveedor/create')}}" role="button">Agregar</a>
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Proveedor</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($proveedores as $proveedor)
			<tr>
				
				<td>{{ $proveedor->nombre}}</td>
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url('/proveedor/'.$proveedor->id.'/edit')}}">Editar</a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection