{!! Form::open(array('url'=>'/Form2','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
<div class="form-group">
	<div class="input-group">
		<font color="#fff"><h4>__________________________________________________</h4></font>
		{!! Form::select('math',[''=>'MILP/MINLP','MILP'=>'MILP','MINLP'=>'MINLP'],null,['class'=>'form-control']) !!}
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary"> Ir </button>		
		</span>
	</div>
</div>
{{Form::close()}}