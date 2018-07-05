@extends("layouts.app")

@section("content")
	<div class="container white">
		<h1>Nuevo Proveedor</h1>
		<!--formulario-->
		@include('proveedor.form', ['proveedor'=>$proveedor, 'url'=>'/proveedor', 'method' => 'POST']);
	</div>
@endsection