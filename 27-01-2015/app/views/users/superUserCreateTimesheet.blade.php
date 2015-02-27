@extends('layouts.super_user')



@section('navbar')

	<li><a href="{{URL::route('superUserHome')}}">Manage Employees</a></li>
	<li class='active'><a href="{{URL::route('manageTimesheets')}}">Manage Timesheet</a></li><li><a href="{{URL::route('pendingTimesheet')}}">Pending Timesheet</a></li>
    <li><a href="#">View Reports</a></li>
	<li><a class="btn" href="{{URL::route('account-sign-out')}}">SIGN OUT</a></li>

@stop

@if(Auth::check())
@section('content')

@else

@endif




<div class="container">

		<h4 style="margin-left:80%; color:black;">Hello {{Auth::user()->user_name}}!</h4>
    <ol class="breadcrumb" style="margin-top:-1%;">
			<li><a href="{{URL::route('superUserHome')}}">Super-User Home</a></li>
                        <li>Manage Timesheets</li>
								
		</ol>

		<div class="row">


<article class="col-xs-12 maincontent">
				
					<h2 class="text-muted" style="color:black;">Manage Timesheets</h2>
				
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="text-center text-muted" style="color:black;">Add Tasks</h3>
							<h3 class="text-center text-muted" style="color:black;">{{--$timesheet->date--}}</h3>
							

			

           {{Form::open (array('route'=>'editMore', 'method'=>'GET' ))}}
                <Input type="text" class='form-control' style="margin-bottom:3%" placeholder='Please Add Tasks' name='task'>
                {{-- link_to_route('tasks.edit', 'Save Task', [$timesheet->id], ['class="btn btn-action"'])--}}
                {{-- link_to_route('editMore', 'Save Task', ['class="btn btn-action"'])--}}
                <button class="btn btn-action" type="submit">Save</button>
            {{Form::close()}}

			
             

		</div>
	</div>
</div>
				</div>
				
			</article>
</div>	<!-- /container -->


@stop