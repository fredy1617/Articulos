{!! Form::open(array('url'=>'/Form2','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
<div class="form-group">
	<div class="input-group">
            <tr align="center">
				<td colspan="4">{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Id, Key, Abs, Temas'])!!}</td>
				<td colspan="2">{!! Form::text('pais',null,['class'=>'form-control', 'placeholder'=>'Pais...'])!!}</td>
				<td colspan="1">{!! Form::text('PH',null,['class'=>'form-control', 'placeholder'=>'...'])!!}</td>
				<td colspan="1">{!! Form::text('TP',null,['class'=>'form-control', 'placeholder'=>'...'])!!}</td>
				<td colspan="1">{!! Form::text('BT',null,['class'=>'form-control', 'placeholder'=>'...'])!!}</td>
				<td colspan="1" >{!! Form::select('math',[''=>'MILP/MINLP','MILP'=>'MILP','MINLP'=>'MINLP'],null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('DP',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('Bi',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('GT',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{{Form::select('Uncertainty', ['Deterministic'=>'Deterministic','Stocastic'=>'Stocastic'], null, ['class'=>'form-control', 'placeholder'=>'... '] )}}</td>
				<td colspan="1">{!! Form::text('Solve',null,['class'=>'form-control', 'placeholder'=>'...'])!!}</td>
				<td colspan="1">{!! Form::select('FT',[''=>'...','mono'=>'mono','multi'=>'multi'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('MT',[''=>'...','mono'=>'mono','multi'=>'multi'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('Cost',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('CO2',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('Import',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('Reliatibity',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('Water',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('Price',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="1">{!! Form::select('Constraist',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="2">{!! Form::select('Demand',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="8">{!! Form::select('plants-planning',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="6">{!! Form::select('plants-operation',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="7">{!! Form::select('plants-other',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="3">{!! Form::select('Transmission',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="3">{!! Form::select('Fuel',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="4">{!! Form::select('Operation',[''=>'...','1'=>'1','0'=>'0'] ,null,['class'=>'form-control']) !!}</td>
				<td colspan="2">Storage</td>
				<td colspan="5">Finacial & Economical</td>
				<td colspan="3">Envioramental</td>
				<td colspan="5">Renewable Source</td>
				<td colspan="4">Other</td>
			</tr>

		
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary"> Buscar </button>		
		</span>
	</div>
</div>
{{Form::close()}}