@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")
	<div class="container white">
		<h1>Completar Formulario(Application)</h1>
		<!--formulario-->
		{!! Form::open(['url'=> '/Form2/'.$form2->id, 'method'=>'POST']) !!}
		<div class="form-group">
			 <div class="form-group{{ $errors->has('id_info') ? ' has-error' : '' }}">
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Titulo '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <div class="form-group{{ $errors->has('Tema1','Tema2','Tema3','Tema4') ? ' has-error' : '' }}">
			
				{{Form::select('Tema1', [ 'DSO' => 'DSO', 'EneSou' => 'EneSou', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP'  => 'GEP', 'Other' => 'Other' , 'Power Dispatch'  => 'Power Dispatch' , 'Power Flow'  => 'Power Flow', 'Escenarios analysis' => 'Escenarios analysis' , 'TEP' => 'TEP'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema1 '] )}}
					@if ($errors->has('Tema1'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema1') }}</strong>
	                    </small>
	                @endif

				{{Form::select('Tema2', [ 'DSO' => 'DSO', 'EneSou' => 'EneSou', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP'  => 'GEP', 'Other' => 'Other' , 'Power Dispatch'  => 'Power Dispatch' , 'Power Flow'  => 'Power Flow', 'Escenarios analysis' => 'Escenarios analysis' , 'TEP' => 'TEP'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema2 '] )}}
					@if ($errors->has('Tema2'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema2') }}</strong>
	                    </small>
	                @endif

	            {{Form::select('Tema3', [ 'DSO' => 'DSO', 'EneSou' => 'EneSou', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP'  => 'GEP', 'Other' => 'Other' , 'Power Dispatch'  => 'Power Dispatch' , 'Power Flow'  => 'Power Flow', 'Escenarios analysis' => 'Escenarios analysis' , 'TEP' => 'TEP'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema3 '] )}}
					@if ($errors->has('Tema3'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema3') }}</strong>
	                    </small>
	                @endif
	            {{Form::select('Tema4', [ 'DSO' => 'DSO', 'EneSou' => 'EneSou', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP'  => 'GEP', 'Other' => 'Other' , 'Power Dispatch'  => 'Power Dispatch' , 'Power Flow'  => 'Power Flow', 'Escenarios analysis' => 'Escenarios analysis' , 'TEP' => 'TEP'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Tema4 '] )}}
					@if ($errors->has('Tema4'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Tema4') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h4>Case of Study</h4>
	        <div class="form-group{{ $errors->has('Pais','Converge') ? ' has-error' : '' }}">
			
				{{Form::select('Pais', ['Nombre'=>'Nombre','Theoric'=>'Theoric'], null, ['class' => 'btn btn-default dropdown-toggle', 'placeholder'=>'Pais '] )}}
					@if ($errors->has('Pais'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Pais') }}</strong>
	                    </small>
	                @endif
				{{Form::select('Converge', ['Nacional'=>'Nacional','Regional'=>'Regional','Local'=>'Local'], null, ['class'=>'btn btn-default dropdown-toggle', 'placeholder'=>'Converge '] )}}
					@if ($errors->has('Converge'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Converge') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h4>Time</h4>
	        <div class="form-group{{ $errors->has('Time') ? ' has-error' : '' }}">
				{{Form::select('Time', ['Planning Horizon'=>'Planning Horizon','Time Perception'=>'Time Perception','Balance Time'=>'Balance Time'], null, ['class'=>'form-control', 'placeholder'=>'... '] )}}
					@if ($errors->has('Time'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Time') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h4>Matematical</h4>
	        <div class="form-group{{ $errors->has('MILP_MINLP','DP','Bi_Level','GT') ? ' has-error' : '' }}">
				{{Form::select('MILP_MINLP', ['MILP'=>'MILP','MINLP'=>'MINLP'], null, ['class'=>'btn btn-default dropdown-toggle', 'placeholder'=>'Modelos : '] )}}
					@if ($errors->has('MILP_MINLP'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('MILP_MINLP') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}
	            {{ Form::label('', '   Seleccionar :   ') }}

	            {{ Form::label('', '  ') }}
	            {{ Form::label('DP', 'DP') }}
              	{{ Form::checkbox('DP', 1) }}
	                @if ($errors->has('DP'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('DP') }}</strong>
	                    </small>
	                @endif

	            {{ Form::label('', '  ') }}
	            {{ Form::label('Bi_Level', 'Bi_Level') }}
              	{{ Form::checkbox('Bi_Level', 1) }}
	                @if ($errors->has('Bi_Level'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Bi_Level') }}</strong>
	                    </small>
	                @endif

	            {{ Form::label('', '  ') }}
	            {{ Form::label('GT', 'GT') }}
              	{{ Form::checkbox('GT', 1) }}
	                @if ($errors->has('GT'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('GT') }}</strong>
	                    </small>
	                @endif
        	</div>
        	
        	<h4>Uncertainty</h4>
	        <div class="form-group{{ $errors->has('Uncertainty') ? ' has-error' : '' }}">
				{{Form::select('Uncertainty', ['Deterministic'=>'Deterministic','Stocastic'=>'Stocastic'], null, ['class'=>'btn btn-default dropdown-toggle', 'placeholder'=>'... '] )}}
					@if ($errors->has('Uncertainty'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Uncertainty') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<h4>Solve Method</h4>
        	<div class="form-group{{ $errors->has('Solve_Method') ? ' has-error' : '' }}">
	            {{Form::text('Solve_Method', $form2->Solve_Method, ['class'=>'form-control', 'placeholder'=>'Solve Method '])}}
	                @if ($errors->has('Solve_Method'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Solve_Method') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<h4>Model</h4>
        	<div class="form-group{{ $errors->has('Focus_Type','Math_Type') ? ' has-error' : '' }}">
				{{Form::select('Focus_Type', ['mono'=>'mono','multi'=>'multi'], null, ['class'=>'btn btn-default dropdown-toggle', 'placeholder'=>'  '] )}}
					@if ($errors->has('Focus_Type'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Focus_Type') }}</strong>
	                    </small>
	                @endif

				{{Form::select('Math_Type', ['mono'=>'mono','multi'=>'multi'], null, ['class'=>'btn btn-default dropdown-toggle', 'placeholder'=>'  '] )}}
					@if ($errors->has('Math_Type'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Math_Type') }}</strong>
	                    </small>
	                @endif
        	</div>

        	<h4>Objetive Funtions</h4>
        	
        	<div class="form-group{{ $errors->has('Cost','CO2_Emissions','Import_Fuel','Reliatibity','Water_withdrawal','Price_fuel_risk','Constraist_violation') ? ' has-error' : '' }}">
	            {{ Form::label('Cost', 'Cost') }}
              	{{ Form::checkbox('CostL', 1) }}
	                @if ($errors->has('CostL'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('CostL') }}</strong>
	                    </small>
	             	@endif

	            
        		{{ Form::label('', '  ') }}	
				{{Form::select('Cost', ['Type'=>'Type'], null, ['class'=>'btn btn-default dropdown-toggle', 'placeholder'=>'Type '] )}}
					@if ($errors->has('Cost'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Cost') }}</strong>
	                    </small>
	                @endif
	             <br>

              	{{ Form::label('CO2_Emissions', 'CO2 Emissions') }}
              	{{ Form::checkbox('CO2_Emissions', 1) }}
	                @if ($errors->has('CO2_Emissions'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('CO2_Emissions') }}</strong>
	                    </small>
	                @endif

	            {{ Form::label('', '  ') }}
	            {{ Form::label('Import_Fuel', 'Import Fuel') }}
              	{{ Form::checkbox('Import_Fuel', 1) }}
	                @if ($errors->has('Import_Fuel'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Import_Fuel') }}</strong>
	                    </small>
	                @endif
	            <br>

	            {{ Form::label('Reliatibity', 'Reliatibity') }}
              	{{ Form::checkbox('Reliatibity', 1) }}
	                @if ($errors->has('Reliatibity'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Reliatibity') }}</strong>
	                    </small>
	                @endif

	            {{ Form::label('', '  ') }}
	            {{ Form::label('Water_withdrawal', 'Water withdrawal') }}
              	{{ Form::checkbox('Water_withdrawal', 1) }}
	                @if ($errors->has('Water_withdrawal'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Water_withdrawal') }}</strong>
	                    </small>
	                @endif
	            <br>

	            {{ Form::label('Price_fuel_risk', 'Price fuel risk') }}
              	{{ Form::checkbox('Price_fuel_risk', 1) }}
	                @if ($errors->has('Price_fuel_risk'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Price_fuel_risk') }}</strong>
	                    </small>
	                @endif

	            {{ Form::label('', '  ') }}
	            {{ Form::label('Constraist_violation', 'Constraist violation') }}
              	{{ Form::checkbox('Constraist_violation', 1) }}
	                @if ($errors->has('Constraist_violation'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Constraist_violation') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<h6>Demand balance</h6>
        	<div class="form-group{{ $errors->has('Power_flow','Node_balance') ? ' has-error' : '' }}">
	            {{ Form::label('Power_flow', 'Power flow') }}
              	{{ Form::checkbox('Power_flow', 1) }}
	                @if ($errors->has('Power_flow'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Power_flow') }}</strong>
	                    </small>
	             	@endif

	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Node_balance', 'Node balance') }}
              	{{ Form::checkbox('Node_balance', 1) }}
	                @if ($errors->has('Node_balance'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Node_balance') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Generation plants-planning</h6>
        	<div class="form-group{{ $errors->has('Generation_capacity ','Generation_capacity_accumulated','Generation_expansion_limitation','Capacity_available_limitation','Generation_available_limitation_Wind','Generation_available_limitation_Solar','Generation_available_limitation_Hydro','Generation_available_limitation_NG') ? ' has-error' : '' }}">
	            {{ Form::label('Generation_capacity', 'Generation capacity') }}
              	{{ Form::checkbox('Generation_capacity', 1) }}
	                @if ($errors->has('Generation_capacity'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Generation_capacity') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Generation_capacity_accumulated', 'Generation capacity accumulated') }}
              	{{ Form::checkbox('Generation_capacity_accumulated', 1) }}
	                @if ($errors->has('Generation_capacity_accumulated'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Generation_capacity_accumulated') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Generation_expansion_limitation', 'Generation expansion limitation') }}
              	{{ Form::checkbox('Generation_expansion_limitation', 1) }}
	                @if ($errors->has('Generation_expansion_limitation'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Generation_expansion_limitation') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Capacity_available_limitation', 'Capacity available limitation') }}
              	{{ Form::checkbox('Capacity_available_limitation', 1) }}
	                @if ($errors->has('Capacity_available_limitation'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Capacity_available_limitation') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Generation_available_limitation_Wind', 'Generation available limitation Wind') }}
              	{{ Form::checkbox('Generation_available_limitation_Wind', 1) }}
	                @if ($errors->has('Generation_available_limitation_Wind'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Generation_available_limitation_Wind') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Generation_available_limitation_Solar', 'Generation available limitation Solar') }}
              	{{ Form::checkbox('Generation_available_limitation_Solar', 1) }}
	                @if ($errors->has('Generation_available_limitation_Solar'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Generation_available_limitation_Solar') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Generation_available_limitation_Hydro', 'Generation available limitation Hydro ') }}
              	{{ Form::checkbox('Generation_available_limitation_Hydro', 1) }}
	                @if ($errors->has('Generation_available_limitation_Hydro'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Generation_available_limitation_Hydro') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Generation_available_limitation_NG', 'Generation available limitation NG') }}
              	{{ Form::checkbox('Generation_available_limitation_NG', 1) }}
	                @if ($errors->has('Generation_available_limitation_NG'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Generation_available_limitation_NG') }}</strong>
	                    </small>
	                @endif
	            <br>
	        </div>
	        <h6>Generation plants-operation</h6>
        	<div class="form-group{{ $errors->has('Power_plants_construction_size','Power_plants_maximun_of_operation','Power_plants_minimun_of_operation','Upward_and_downward_ramping_capabilities','Minimun_up_and_down_times_capabilities','Startup_and_shutdown') ? ' has-error' : '' }}">
	            {{ Form::label('Power_plants_construction_size', 'Power plants construction size') }}
              	{{ Form::checkbox('Power_plants_construction_size', 1) }}
	                @if ($errors->has('Power_plants_construction_size'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Power_plants_construction_size') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Power_plants_maximun_of_operation', 'Power plants maximun of operation') }}
              	{{ Form::checkbox('Power_plants_maximun_of_operation', 1) }}
	                @if ($errors->has('Power_plants_maximun_of_operation'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Power_plants_maximun_of_operation') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Power_plants_minimun_of_operation', 'Power plants minimun of operation') }}
              	{{ Form::checkbox('Power_plants_minimun_of_operation', 1) }}
	                @if ($errors->has('Power_plants_minimun_of_operation'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Power_plants_minimun_of_operation') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Upward_and_downward_ramping_capabilities', 'Upward and downward ramping capabilities') }}
              	{{ Form::checkbox('Upward_and_downward_ramping_capabilities', 1) }}
	                @if ($errors->has('Upward_and_downward_ramping_capabilities'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Upward_and_downward_ramping_capabilities') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Minimun_up_and_down_times_capabilities', 'Minimun up and down times capabilities') }}
              	{{ Form::checkbox('Minimun_up_and_down_times_capabilities', 1) }}
	                @if ($errors->has('Minimun_up_and_down_times_capabilities'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Minimun_up_and_down_times_capabilities') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Startup_and_shutdown', 'Startup and shutdown') }}
              	{{ Form::checkbox('Startup_and_shutdown', 1) }}
	                @if ($errors->has('Startup_and_shutdown'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Startup_and_shutdown') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Generation plants-other</h6>
        	<div class="form-group{{ $errors->has('Units_Available','Construction_time','Maintenance','Lifetime','Unistalled','Upgraded','CCS_constraints') ? ' has-error' : '' }}">
	            {{ Form::label('Units_Available', 'Units Available') }}
              	{{ Form::checkbox('Units_Available', 1) }}
	                @if ($errors->has('Units_Available'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Units_Available') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Construction_time', 'Construction time') }}
              	{{ Form::checkbox('Construction_time', 1) }}
	                @if ($errors->has('Construction_time'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Construction_time') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Power_plants_minimun_of_operation', 'Power plants minimun of operation') }}
              	{{ Form::checkbox('Power_plants_minimun_of_operation', 1) }}
	                @if ($errors->has('Power_plants_minimun_of_operation'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Power_plants_minimun_of_operation') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Upward_and_downward_ramping_capabilities', 'Upward and downward ramping capabilities') }}
              	{{ Form::checkbox('Upward_and_downward_ramping_capabilities', 1) }}
	                @if ($errors->has('Upward_and_downward_ramping_capabilities'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Upward_and_downward_ramping_capabilities') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Minimun_up_and_down_times_capabilities', 'Minimun up and down times capabilities') }}
              	{{ Form::checkbox('Minimun_up_and_down_times_capabilities', 1) }}
	                @if ($errors->has('Minimun_up_and_down_times_capabilities'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Minimun_up_and_down_times_capabilities') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Startup_and_shutdown', 'Startup and shutdown') }}
              	{{ Form::checkbox('Startup_and_shutdown', 1) }}
	                @if ($errors->has('Startup_and_shutdown'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Startup_and_shutdown') }}</strong>
	                    </small>
	                @endif
	        </div>
        	<div class="form-group{{ $errors->has('Keyboard') ? ' has-error' : '' }}">
	            {{Form::text('Keyboard', $form2->Keyboard, ['class'=>'form-control', 'placeholder'=>'Keyboard '])}}
	                @if ($errors->has('Keyboard'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Keyboard') }}</strong>
	                    </small>
	                @endif
        	</div>
        	<div class="form-group{{ $errors->has('Abstract') ? ' has-error' : '' }}">
	            {{Form::text('Abstract', $form2->Abstract, ['class'=>'form-control', 'placeholder'=>'Abstract'])}}
	                @if ($errors->has('Abstract'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Abstract') }}</strong>
	                    </small>
	                @endif
        	</div>


			
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/'.$form2->id_info.'/edit')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection