@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')

<div class="big-padding text-center blue-grey white-text">
	
	<font color="#eeeeee"><h8  >-</h8></font>
</div>

<div class="row text-center" align="text-center">
	<font color="#eeeeee"><h8>_____</h8></font>
	<h2>Articulos</h2>
	<font color="#eeeeee"><h1>___</h1></font>
	<a  href="/Articulos/public/infobase/create" ><button class="btn btn-outline-success">Registrar</button> </a>
	<font color="#eeeee"><h1>____________________________</h1></font>
	<span>
	@include('base.search')
	</span>
</div>
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Id</td>
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
				<td>{{ $bases->id_Art}}</td>
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
	
</div>

<div class="row">{{$base->render()}}</div>



@endsection
