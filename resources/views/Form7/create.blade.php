@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection
@section("content")

    	
	<div class="container white">
		<h1>Esenarios</h1>
        	<div class="form-group{{ $errors->has('Fuel_Price', 'Inv_Cos', 'Ope_Cos','Energy_Price','GENCO', 'Budget','CO2_Price','Demand','RES_target','RPS','Thermal_Generation', 'RE_Source', 'Wind','Solar','Hydro', 'Nuclear','Environmental','Water','Elctric_Car','Policies') ? ' has-error' : '' }}">
        		<table>
        		<tr>
	            <td>{{ Form::label('Fuel_Price', 'Fuel Price',['class'=>'label label-default']) }}
              	{{ Form::checkbox('Fuel_Price', 1) }}
	                @if ($errors->has('Fuel_Price'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Fuel_Price') }}</strong>
	                    </small>
	                @endif	</td>           
              	<td>{{ Form::label('Inv_Cos', 'Inv Cos') }}
              	{{ Form::checkbox('Inv_Cos', 1) }}
	                @if ($errors->has('Inv_Cos'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Inv_Cos') }}</strong>
	                    </small>
	                @endif </td>        			
	           <td> {{ Form::label('Ope_Cos', 'Ope Cos') }}
              	{{ Form::checkbox('Ope_Cos', 1) }}
	                @if ($errors->has('Ope_Cos'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Ope_Cos') }}</strong>
	                    </small>
	                @endif </td>
        		<td>{{ Form::label('Energy_Price', 'Energy Price') }}
              	{{ Form::checkbox('Energy_Price', 1) }}
	                @if ($errors->has('Energy_Price'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Energy_Price') }}</strong>
	                    </small>
	                @endif </td>
	            </tr>
	            <tr>
	            <td>{{ Form::label('GENCO', 'GENCO') }}
              	{{ Form::checkbox('GENCO', 1) }}
	                @if ($errors->has('GENCO'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('GENCO') }}</strong>
	                    </small>
	                @endif</td>
	            <td>{{ Form::label('Budget', 'Budget') }}
              	{{ Form::checkbox('Budget', 1) }}
	                @if ($errors->has('Budget'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Budget') }}</strong>
	                    </small>
	                @endif </td>
	            <td>{{ Form::label('CO2_Price', 'CO2 Price') }}
              	{{ Form::checkbox('CO2_Price', 1) }}
	                @if ($errors->has('CO2_Price'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('CO2_Price') }}</strong>
	                    </small>
	                @endif	</td>      
        		<td>{{ Form::label('Demand', 'Demand') }}
              	{{ Form::checkbox('Demand', 1) }}
	                @if ($errors->has('Demand'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Demand') }}</strong>
	                    </small>
	                @endif </td>
	            </tr>
	            <tr>
	            <td>{{ Form::label('RES_target', 'RES target') }}
              	{{ Form::checkbox('RES_target', 1) }}
	                @if ($errors->has('RES_target'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('RES_target') }}</strong>
	                    </small>
	                @endif	</td>            
        		<td>{{ Form::label('RPS', 'RPS') }}
              	{{ Form::checkbox('RPS', 1) }}
	                @if ($errors->has('RPS'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('RPS') }}</strong>
	                    </small>
	                @endif </td>
        		<td>{{ Form::label('Thermal_Generation', 'Thermal Generation') }}
              	{{ Form::checkbox('Thermal_Generation', 1) }}
	                @if ($errors->has('Thermal_Generation'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Thermal_Generation') }}</strong>
	                    </small>
	                @endif </td>
        		<td>{{ Form::label('RE_Source', 'RE_Source') }}
              	{{ Form::checkbox('RE_Source', 1) }}
	                @if ($errors->has('RE_Source'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('RE_Source') }}</strong>
	                    </small>
	                @endif </td>
	            </tr>
	            <tr>
	            <td>{{ Form::label('Wind', 'Wind') }}
              	{{ Form::checkbox('Wind', 1) }}
	                @if ($errors->has('Wind'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Wind') }}</strong>
	                    </small>
	                @endif	</td>           
        		<td>{{ Form::label('Solar', 'Solar') }}
              	{{ Form::checkbox('Solar', 1) }}
	                @if ($errors->has('Solar'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Solar') }}</strong>
	                    </small>
	                @endif </td>
	            <td>{{ Form::label('Hydro', 'Hydro') }}
              	{{ Form::checkbox('Hydro', 1) }}
	                @if ($errors->has('Hydro'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Hydro') }}</strong>
	                    </small>
	                @endif </td>
	            <td>{{ Form::label('Nuclear', 'Nuclear') }}
              	{{ Form::checkbox('Nuclear', 1) }}
	                @if ($errors->has('Nuclear'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Nuclear') }}</strong>
	                    </small>
	                @endif </td>
	            </tr>
	            <tr>
	            <td>{{ Form::label('Environmental', 'Environmental') }}
              	{{ Form::checkbox('Environmental', 1) }}
	                @if ($errors->has('Environmental'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Environmental') }}</strong>
	                    </small>
	                @endif </td>         
        		<td>{{ Form::label('Water', 'Water') }}
              	{{ Form::checkbox('Water', 1) }}
	                @if ($errors->has('Water'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Water') }}</strong>
	                    </small>
	                @endif </td>
	            <td>{{ Form::label('Elctric_Car', 'Elctric Car') }}
              	{{ Form::checkbox('Elctric_Car', 1) }}
	                @if ($errors->has('Elctric_Car'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Elctric_Car') }}</strong>
	                    </small>
	                @endif </td>
	            <td>{{ Form::label('Policies', 'Policies') }}
              	{{ Form::checkbox('Policies', 1) }}
	                @if ($errors->has('Policies'))
	                    <small class="text-danger">
		                    <strong>{{ $errors->first('Policies') }}</strong>
	                    </small>
	                @endif </td>
	            </tr>
	        </table>
	        </div>

	</div>
@endsection