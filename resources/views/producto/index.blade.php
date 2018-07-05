@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
	<h1>Productos</h1>
</div>
<a class="btn btn-outline-success" href="{{url('/producto/create')}}" role="button">Agregar</a>

<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Producto</td>
				<td>Precio</td>
				<td>Cantidad</td>
				<td>Tipo Cantidad</td>
				<td>Proveedor</td>
				<td>Categoria</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($producto as $producto)
			<tr>
				
				<td>{{ $producto->nombre}}</td>
				<td>{{ $producto->precio}}</td>
				<td>{{ $producto->cantidad}}</td>
				<td>{{ $producto->tipo_cantidad}}</td>
				<td>{{ $producto->proveedor->nombre}}</td>
				<td>{{ $producto->categoria->nombre}}</td>
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url('/producto/'.$producto->id.'/edit')}}">Editar</a>
					<!--
					<button type="button" class="btn btn-outline-danger btn-sm">@include('producto.delete',['producto'=>$producto])</button>
					-->
				
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection