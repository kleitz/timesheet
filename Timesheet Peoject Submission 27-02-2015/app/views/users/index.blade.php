@extends('layouts.super_user')


@section('navbar')

	<li class='active'><a href="{{URL::route('superUserHome')}}">Manage Employees</a></li>
	<li><a href="{{URL::route('manageTimesheets')}}">Manage Timesheet</a></li>
	<li><a href="{{URL::route('pendingTimesheet')}}">Pending Timesheet</a></li>
    <li><a href="#">View Reports</a></li>
	<li><a class="btn" href="{{URL::route('account-sign-out')}}">SIGN OUT</a></li>


@stop

@if(Auth::check())
@section('content')

	<div class="container">
		<h4 style="margin-left:80%; color:black;">Hello {{Auth::user()->user_name}}!</h4>
		<ol class="breadcrumb" style="margin-top:-1%;">
			<li><a href="SuperUser">Super-User Home</a></li>
            <li class="active">Manage Employees</li>
            
		</ol>


@else

@endif

		<div class="row">


		<article class="col-xs-12 maincontent" style="width:80%; margin-left:10%; margin-top:20px;" >
				
					
				
				
			<div >
				<div class="panel panel-default">
					<div class="panel-body">
					 {{link_to_route('users.create' , 'Add Employee' , [], ['class' => 'btn btn-action' , 'style'=>'color:#FFF;' ] )}}
							<hr><!-------------------------Horizontal Line in Form---------------------------->


<table  >
       
    <thead>
        <tr>
          <th style="color:white; background-color:black; border-color:black;">Employee Name</th>
          <th style="color:white; background-color:black; border-color:black;">Status</th>
          <th style="color:white; background-color:black; border-color:black;">Update Employee</th>
        </tr>
    </thead>

    <tbody>
		
    	 
			@foreach( $users as $user )
					
						<tr>
					        <td style="color:black; background-color:white; border-color:black;">
					          	<h4>{{ link_to('' , $user->user_name , [$user->id] )  }}</h4>
					        </td>

					        <td style="color:black; background-color:white; border-color:black;">
					          	<h4>{{ link_to('' , $user->active , [$user->id] )  }}</h4>
					      	</td>

					        <td style="color:black; background-color:white; border-color:black;">
								
								{{link_to_route('users.edit' , 'Edit Employee', [$user->id] , ['class' => 'button btn-xs btn-action'] )}}
					        	
					    	</td>

        				</tr>


			@endforeach
		 
	</tbody>


</table>
		                    
	                    </div>
                    </div>
				</div>
				
		</article>
</div>	<!-- /container -->



@stop