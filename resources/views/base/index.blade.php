@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
	<h1>Articulos</h1>
</div>

<div class="row text-center" align="text-center">
	<font color="#eeeeee"><h8>_____________</h8></font>
	<h1>Articulos</h1>
	<font color="#eeeeee"><h8  >_____________</h8></font>
	<a  href="/infobase/create'" ><button class="btn btn-outline-success">Registrar</button> </a>
	<span>
	@include('base.search')
	</span>
</div>
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Titulo</td>
				<td>Año</td>
				<td>Revista</td>
				<td>Tipo </td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			@foreach ($base as $bases)
			<tr>
				<td>{{ $bases->titulo}}</td>
				<td>{{ $bases->year}}</td>
				<td>{{ $bases->id_revista}}</td>
				<td>{{ $bases->tipo}}</td>
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url('/infobase/'.$bases->id.'/edit')}}">Editar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="row">{{$base->render()}}</div>
	
</div>



@endsection
