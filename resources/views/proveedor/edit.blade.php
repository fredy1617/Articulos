@extends("layouts.app")

@section("content")
	<div class="container white">
		<h1>Editar Proveedor</h1>
		<div class="form-group text-right">
			{!!Form::open(['route'=>['proveedor.destroy', $proveedor->id], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>"btn btn-outline-danger"])!!}
			{!!Form::close()!!}
		</div>
		<!--formulario-->
		@include('proveedor.form', ['proveedor'=>$proveedor, 'url'=>'/proveedor/'.$proveedor->id, 'method' => 'PATCH'])
	</div>
@endsection