@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Nuevo Producto</h1>
		<!--formulario-->
			{!! Form::open(['url'=> '/producto/'.$producto->id, 'method'=>'POST']) !!}
		<div class="form-group">
			<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
	            {{Form::text('nombre', $producto->nombre, ['class'=>'form-control', 'placeholder'=>'nombre...'])}}
	                @if ($errors->has('nombre'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('nombre') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
				{{Form::text('precio', $producto->precio, ['class'=>'form-control', 'placeholder'=>'precio...'])}}
					@if ($errors->has('precio'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('precio') }}</strong>
	                    </small>
	                @endif
	        </div>

	        <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
				{{Form::text('cantidad', $producto->cantidad, ['class'=>'form-control', 'placeholder'=>'cantidad...'])}}
					@if ($errors->has('cantidad'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('cantidad') }}</strong>
	                    </small>
	                @endif
	        </div>
			
			<div class="form-group{{ $errors->has('tipo_cantidad') ? ' has-error' : '' }}">
				{{Form::select('tipo_cantidad', ['' => 'Seleccione un tipo de cantidad', 'kilogramos' => 'kilogramos', 'gramos' => 'gramos', 'litros' => 'litros', 'mililitros' => 'mililitros', 'piezas' => 'piezas'], null, ['class'=>'form-control'])}}
					@if ($errors->has('tipo_cantidad'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('tipo_cantidad') }}</strong>
	                    </small>
	                @endif
	        </div>
			
			<div class="form-group{{ $errors->has('proveedor_id') ? ' has-error' : '' }}">
				{{Form::select('proveedor_id', $proveedores, null, ['class'=>'form-control', 'placeholder'=>'Proveedor...'] )}}
					@if ($errors->has('proveedor_id'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('proveedor_id') }}</strong>
	                    </small>
	                @endif
	        </div>

	        <div class="form-group{{ $errors->has('categoria_id') ? ' has-error' : '' }}">
				{{Form::select('categoria_id', $categorias, null, ['class'=>'form-control', 'placeholder'=>'Categoria...'] )}}
					@if ($errors->has('categoria_id'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('categoria_id') }}</strong>
	                    </small>
	                @endif
	        </div>
			
		</div>
		<div class="form-group text-right">
			<a href="{{url('/producto')}}">Regresar al listado de productos</a>
			<input type="submit" value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection