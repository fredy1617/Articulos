{!! Form::open(array('url'=>'/Form2','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Search..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary"> Search </button>		
		</span>
	</div>
</div>
{{Form::close()}}