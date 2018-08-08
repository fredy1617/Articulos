@extends('layouts.app2')

@extends('layouts.nav')
@section('nav')
@endsection
<br>
<br>
<div class="big-padding text-center blue-grey white-text">
	<font color="#eeeeee"><h8>-</h8></font>
	<h2>Application</h2><br>
</div>
<div class="container">
	<table class="table table-bordered" >
		<thead>
			<tr align="center">
				<td colspan="4"> </td>
				<td colspan="2">Case of Study</td>
				<td colspan="3">Time</td>
				<td colspan="4" >Matematical</td>
				<td colspan="2"> </td>
				<td colspan="2">Model</td>
				<td colspan="7">Objetive Funtions</td>
				<td colspan="2">Demand Balance</td>
				<td colspan="8">Generation plants-planning</td>
				<td colspan="6">Generation plants-operation</td>
				<td colspan="7">Generation plants-other</td>
				<td colspan="3">Transmission lines</td>
				<td colspan="3">Fuel</td>
				<td colspan="4">Operation</td>
				<td colspan="2">Storage</td>
				<td colspan="5">Finacial & Economical</td>
				<td colspan="3">Envioramental</td>
				<td colspan="5">Renewable Source</td>
				<td colspan="4">Other</td>
			</tr>
			@include('Form2.search')
			<tr>
				<td>Id</td><td>Keyboard</td><td>Abstract</td><td>Temas</td>
				<td>Pais</td><td>Converge</td>
				<td>Planning Horizon</td><td>Time Perception</td><td>Balance Time</td>
				<td>MILP/MINLP</td><td>__D.P.___</td><td>Bi_Level</td><td>__G.T.___</td>
				<td>Uncertainty</td><td>Solve_Method</td>
				<td>Focus_Type</td><td>Math_Type</td>
				<td>_Cost___</td>
				<td>CO2_Emissions</td>
				<td>Import_Fuel</td>
				<td>Reliatibity</td>
				<td>Water withdrawal</td>
				<td>Price_fuel_risk</td>
				<td>Constraist violation</td>
				<td>Power flow</td><td>Node balance</td>
				<td>Generation capacity</td>
				<td>Generation capacity accumulated</td>
				<td>Generation expansion limitation</td>
				<td>Capacity available limitation</td>
				<td>GAL Wind</td>
				<td>GAL Solar</td>
				<td>GAL Hydro</td>
				<td>GAL NG</td>
				<td>Power plants construction size</td>
				<td>Power plants maximun of operation</td>
				<td>Power plants minimun of operation</td>
				<td>Upward and downward ramping capabilities</td>
				<td>Minimun up and down times capabilities</td>
				<td>Startup and shutdown</td>
				<td>Units Available</td>
				<td>Construction time</td>
				<td>Maintenance</td>
				<td>Lifetime</td>
				<td>Unistalled</td>
				<td>Upgraded</td>
				<td>CCS constraints</td>
				<td>Transmission capacity</td>
				<td>Transmission capacity Accumulated</td>
				<td>Transmission available limitation</td>
				<td>Fuel Demand</td><td>Maximun Fuel Demand</td><td>Fuel mix ratio</td>
				<td>Spinning reserve</td><td>Operating reserve</td><td>Reserve Margin</td><td>Reliability</td>
				<td>Pumping water</td><td>ESS constraints</td>
				<td>Unit Operating cost</td>
				<td>Annual budget</td>
				<td>Maximun investment</td>
				<td>Sold energy</td>
				<td>Market Power</td>
				<td>Emissions</td><td>Emissions target</td><td>Emissions markets</td>
				<td>Penetration Potential</td>
				<td>Max RES penetration</td>
				<td>Min RES contribution</td>
				<td>RES target</td>
				<td>RPS</td>
				<td>Heat consumption</td><td>Unit clustering</td><td>Interconexion</td><td>DSM projects</td>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($form2 as $form2)
			<tr> 
				<td>{{ $form2->id_info }}</td>
				<td>{{ $form2->Keyboard }}</td>
				<td>{{ $form2->Abstract }}</td>
				<td>{{ $form2->Tema1.' '.$form2->Tema2.' '.$form2->Tema3.' '.$form2->Tema4}}</td>
				<td>{{ $form2->Pais }}</td><td>{{ $form2->Converge }}</td>
				<td>{{ $form2->Planning_Horizon }}</td>
				<td>{{ $form2->Time_Perception }}</td>
				<td>{{ $form2->Balance_Time }}</td>
				<td>{{ $form2->MILP_MINLP }}</td>
				<td>{{ $form2->DP }}</td>
				<td>{{ $form2->Bi_Level }}</td>
				<td>{{ $form2->GT }}</td>
				<td>{{ $form2->Uncertainty }}</td>
				<td>{{ $form2->Solve_Method }}</td>
				<td>{{ $form2->Focus_Type }}</td>
				<td>{{ $form2->Math_Type }}</td>
				<td>{{ $form2->Cost }}</td>
				<td>{{ $form2->CO2_Emissions }}</td>
				<td>{{ $form2->Import_Fuel }}</td>
				<td>{{ $form2->Reliatibity }}</td>
				<td>{{ $form2->Water_withdrawal }}</td>
				<td>{{ $form2->Price_fuel_risk }}</td>
				<td>{{ $form2->Constraist_violation }}</td>
				<td>{{ $form2->Power_flow }}</td>
				<td>{{ $form2->Node_balance }}</td>
				<td>{{ $form2->Generation_capacity }}</td>
				<td>{{ $form2->Generation_capacity_accumulated }}</td>
				<td>{{ $form2->Generation_expansion_limitation }}</td>
				<td>{{ $form2->Capacity_available_limitation }}</td>
				<td>{{ $form2->Generation_available_limitation_Wind }}</td>
				<td>{{ $form2->Generation_available_limitation_Solar }}</td>
				<td>{{ $form2->Generation_available_limitation_Hydro }}</td>
				<td>{{ $form2->Generation_available_limitation_NG }}</td>
				<td>{{ $form2->Power_plants_construction_size }}</td>
				<td>{{ $form2->Power_plants_maximun_of_operation }}</td>
				<td>{{ $form2->Power_plants_minimun_of_operation }}</td>
				<td>{{ $form2->Upward_and_downward_ramping_capabilities }}</td>
				<td>{{ $form2->Minimun_up_and_down_times_capabilities }}</td>
				<td>{{ $form2->Startup_and_shutdown }}</td>
				<td>{{ $form2->Units_Available }}</td>
				<td>{{ $form2->Construction_time }}</td>
				<td>{{ $form2->Maintenance }}</td>
				<td>{{ $form2->Lifetime }}</td>
				<td>{{ $form2->Unistalled }}</td>
				<td>{{ $form2->Upgraded }}</td>
				<td>{{ $form2->CCS_constraints }}</td>
				<td>{{ $form2->Transmission_capacity }}</td>
				<td>{{ $form2->Transmission_capacity_Accumulated }}</td>
				<td>{{ $form2->Transmission_available_limitation }}</td>
				<td>{{ $form2->Fuel_Demand }}</td>
				<td>{{ $form2->Maximun_Fuel_Demand }}</td>
				<td>{{ $form2->Fuel_mix_ratio }}</td>
				<td>{{ $form2->Spinning_reserve }}</td>
				<td>{{ $form2->Operating_reserve }}</td>
				<td>{{ $form2->Reserve_Margin }}</td>
				<td>{{ $form2->Op_Reliability }}</td>
				<td>{{ $form2->Pumping_water }}</td>
				<td>{{ $form2->ESS_constraints }}</td>
				<td>{{ $form2->Unit_Operating_cost }}</td>
				<td>{{ $form2->Annual_budget }}</td>
				<td>{{ $form2->Maximun_investment }}</td>
				<td>{{ $form2->Sold_energy }}</td>
				<td>{{ $form2->Market_Power }}</td>
				<td>{{ $form2->Emissions }}</td>
				<td>{{ $form2->Emissions_target }}</td>
				<td>{{ $form2->Emissions_markets }}</td>
				<td>{{ $form2->Penetration_Potential }}</td>
				<td>{{ $form2->Max_RES_penetration }}</td>
				<td>{{ $form2->Min_RES_contribution }}</td>
				<td>{{ $form2->RES_target }}</td>
				<td>{{ $form2->RPS }}</td>
				<td>{{ $form2->Heat_consumption }}</td>
				<td>{{ $form2->Unit_clustering }}</td>
				<td>{{ $form2->Interconexion }}</td>
				<td>{{ $form2->DSM_projects }}</td>
			@endforeach
		</tbody>
	</table>	
</div>
