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
				{{Form::select('id_info', $bases, null, ['class'=>'form-control', 'placeholder'=>'Selecciona el titulo de tu articulo '] )}}
					@if ($errors->has('id_info'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('id_info') }}</strong>
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
	            {{ Form::label('Maintenance', 'Maintenance') }}
              	{{ Form::checkbox('Maintenance', 1) }}
	                @if ($errors->has('Maintenance'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Maintenance') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Lifetime', 'Lifetime') }}
              	{{ Form::checkbox('Lifetime', 1) }}
	                @if ($errors->has('Lifetime'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Lifetime') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Unistalled', 'Unistalled') }}
              	{{ Form::checkbox('Unistalled', 1) }}
	                @if ($errors->has('Unistalled'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Unistalled') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Upgraded', 'Upgraded') }}
              	{{ Form::checkbox('Upgraded', 1) }}
	                @if ($errors->has('Upgraded'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Upgraded') }}</strong>
	                    </small>
	                @endif
	            
	            {{ Form::label('CCS_constraints', 'CCS constraints') }}
              	{{ Form::checkbox('CCS_constraints', 1) }}
	                @if ($errors->has('CCS_constraints'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('CCS_constraints') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Transmission lines</h6>
	        <div class="form-group{{ $errors->has('Transmission_capacity','Transmission_capacity_Accumulated','Transmission_available_limitation') ? ' has-error' : '' }}">
	            
	            {{ Form::label('Transmission_capacity', 'Transmission capacity') }}
              	{{ Form::checkbox('Transmission_capacity', 1) }}
	                @if ($errors->has('Transmission_capacity'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Transmission_capacity') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Transmission_capacity_Accumulated', 'Transmission capacity Accumulated') }}
              	{{ Form::checkbox('Transmission_capacity_Accumulated', 1) }}
	                @if ($errors->has('Transmission_capacity_Accumulated'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Transmission_capacity_Accumulated') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}
	            {{ Form::label('Transmission_available_limitation', 'Transmission available limitation') }}
              	{{ Form::checkbox('Transmission_available_limitation', 1) }}
	                @if ($errors->has('Transmission_available_limitation'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Transmission_available_limitation') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Fuel</h6>
	        <div class="form-group{{ $errors->has('Fuel_Demand','Maximun_Fuel_Demand','Fuel_mix_ratio') ? ' has-error' : '' }}">
	            
	            {{ Form::label('Fuel_Demand', 'Fuel Demand') }}
              	{{ Form::checkbox('Fuel_Demand', 1) }}
	                @if ($errors->has('Fuel_Demand'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Fuel_Demand') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Maximun_Fuel_Demand', 'Maximun Fuel Demand') }}
              	{{ Form::checkbox('Maximun_Fuel_Demand', 1) }}
	                @if ($errors->has('Maximun_Fuel_Demand'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Maximun_Fuel_Demand') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}
	            {{ Form::label('Fuel_mix_ratio', 'Fuel mix ratio') }}
              	{{ Form::checkbox('Fuel_mix_ratio', 1) }}
	                @if ($errors->has('Fuel_mix_ratio'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Fuel_mix_ratio') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Operation</h6>
	        <div class="form-group{{ $errors->has('Spinning_reserve','Operating_reserve','Reserve_Margin','Reliability') ? ' has-error' : '' }}"> 
	            {{ Form::label('Spinning_reserve', 'Spinning reserve') }}
              	{{ Form::checkbox('Spinning_reserve', 1) }}
	                @if ($errors->has('Spinning_reserve'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Spinning_reserve') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Operating_reserve', 'Operating reserve') }}
              	{{ Form::checkbox('Operating_reserve', 1) }}
	                @if ($errors->has('Operating_reserve'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Operating_reserve') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Reserve_Margin', 'Reserve Margin') }}
              	{{ Form::checkbox('Reserve_Margin', 1) }}
	                @if ($errors->has('Reserve_Margin'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Reserve_Margin') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}	
              	{{ Form::label('Op_Reliability', 'Reliability') }}
              	{{ Form::checkbox('Op_Reliability', 1) }}
	                @if ($errors->has('Op_Reliability'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Op_Reliability') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Storage</h6>
	        <div class="form-group{{ $errors->has('Pumping_water','ESS_constraints') ? ' has-error' : '' }}"> 
	            {{ Form::label('Pumping_water', 'Pumping water') }}
              	{{ Form::checkbox('Pumping_water', 1) }}
	                @if ($errors->has('Pumping_water'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Pumping_water') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('ESS_constraints', 'ESS constraints') }}
              	{{ Form::checkbox('ESS_constraints', 1) }}
	                @if ($errors->has('ESS_constraints'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('ESS_constraints') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Financial & Economic</h6>
	        <div class="form-group{{ $errors->has('Unit_Operating_cost','Annual_budget','Maximun_investment','Sold_energy','Market_Power') ? ' has-error' : '' }}"> 
	            {{ Form::label('Unit_Operating_cost', 'Unit Operating cost') }}
              	{{ Form::checkbox('Unit_Operating_cost', 1) }}
	                @if ($errors->has('Unit_Operating_cost'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Unit_Operating_cost') }}</strong>
	                    </small>
	                @endif
	            
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Annual_budget', 'Annual budget') }}
              	{{ Form::checkbox('Annual_budget', 1) }}
	                @if ($errors->has('Annual_budget'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Annual_budget') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Maximun_investment', 'Maximun investment') }}
              	{{ Form::checkbox('Maximun_investment', 1) }}
	                @if ($errors->has('Maximun_investment'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Maximun_investment') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}	
              	{{ Form::label('Sold_energy', 'Sold energy') }}
              	{{ Form::checkbox('Sold_energy', 1) }}
	                @if ($errors->has('Sold_energy'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Sold_energy') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}	
              	{{ Form::label('Market_Power', 'Market Power') }}
              	{{ Form::checkbox('Market_Power', 1) }}
	                @if ($errors->has('Market_Power'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Market_Power') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Environmental</h6>
	        <div class="form-group{{ $errors->has('Emissions','Emissions_target','Emissions_markets') ? ' has-error' : '' }}">
	            {{ Form::label('Emissions', 'Emissions') }}
              	{{ Form::checkbox('Emissions', 1) }}
	                @if ($errors->has('Emissions'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Emissions') }}</strong>
	                    </small>
	                @endif
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Emissions_target', 'Emissions target') }}
              	{{ Form::checkbox('Emissions_target', 1) }}
	                @if ($errors->has('Emissions_target'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Emissions_target') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}
	            {{ Form::label('Emissions_markets', 'Emissions markets') }}
              	{{ Form::checkbox('Emissions_markets', 1) }}
	                @if ($errors->has('Emissions_markets'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Emissions_markets') }}</strong>
	                    </small>
	                @endif
	        </div>
	         <h6>Renewable source</h6>
	        <div class="form-group{{ $errors->has('Penetration_Potential','Max_RES_penetration','Min_RES_contribution','RES_target','RPS') ? ' has-error' : '' }}"> 
	            {{ Form::label('Penetration_Potential', 'Penetration Potential') }}
              	{{ Form::checkbox('Penetration_Potential', 1) }}
	                @if ($errors->has('Penetration_Potential'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Penetration_Potential') }}</strong>
	                    </small>
	                @endif
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Max_RES_penetration', 'Max RES penetration') }}
              	{{ Form::checkbox('Max_RES_penetration', 1) }}
	                @if ($errors->has('Max_RES_penetration'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Max_RES_penetration') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Min_RES_contribution', 'Min RES contribution') }}
              	{{ Form::checkbox('Min_RES_contribution', 1) }}
	                @if ($errors->has('Min_RES_contribution'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Min_RES_contribution') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}	
              	{{ Form::label('RES_target', 'RES target') }}
              	{{ Form::checkbox('RES_target', 1) }}
	                @if ($errors->has('RES_target'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('RES_target') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}	
              	{{ Form::label('RPS', 'RPS') }}
              	{{ Form::checkbox('RPS', 1) }}
	                @if ($errors->has('RPS'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('RPS') }}</strong>
	                    </small>
	                @endif
	        </div>
	        <h6>Other</h6>
	        <div class="form-group{{ $errors->has('Heat_consumption','Unit_clustering','Interconexion','DSM_projects') ? ' has-error' : '' }}"> 
	            {{ Form::label('Heat_consumption', 'Heat consumption') }}
              	{{ Form::checkbox('Heat_consumption', 1) }}
	                @if ($errors->has('Heat_consumption'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Heat_consumption') }}</strong>
	                    </small>
	                @endif
        		{{ Form::label('', '  ') }}	
              	{{ Form::label('Unit_clustering', 'Unit clustering') }}
              	{{ Form::checkbox('Unit_clustering', 1) }}
	                @if ($errors->has('Unit_clustering'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Unit_clustering') }}</strong>
	                    </small>
	                @endif
	            <br>
	            {{ Form::label('Interconexion', 'Interconexion (countries or regions)') }}
              	{{ Form::checkbox('Interconexion', 1) }}
	                @if ($errors->has('Interconexion'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Interconexion') }}</strong>
	                    </small>
	                @endif
	            {{ Form::label('', '  ') }}	
              	{{ Form::label('DSM_projects', 'DSM projects') }}
              	{{ Form::checkbox('DSM_projects', 1) }}
	                @if ($errors->has('DSM_projects'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('DSM_projects') }}</strong>
	                    </small>
	                @endif
	        </div>        	
		</div>
		<div class="form-group text-right">
			<a href="{{url('/infobase/')}}">Regresar al listado de Articulos</a>
			<input type="submit"  value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection