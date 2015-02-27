@extends('layouts.super_user')



@section('navbar') 
	
	<li class="active"><a href="{{URL::route('supervisorHome')}}">Home</a></li>
	<li><a href="{{URL::route('issuedTimesheet')}}">Fill Timesheet</a></li>
	<li><a href="{{--URL::route('#')--}}">Accepted Timesheets</a></li>
	<li><a href="{{URL::route('pendingTimesheets')}}">Review Timesheets</a></li>
	<li><a class="btn" href="{{URL::route('account-sign-out')}}">SIGN OUT</a></li>

@stop


@section('content')






<div class="container">

		<h4 style="margin-left:80%; color:black;">Hello {{Auth::user()->user_name}}!</h4>
    <ol class="breadcrumb" style="margin-top:-1%;">
			<li><a href="SuperUser">Supervisor Home</a></li>
		</ol>

		<div class="row">


          <article class="col-xs-12 maincontent">
				
					<h3 class="text-muted" style="color:black;">Supervisor Home</h3>
				
				<hr>
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
						<h3 class="text-center text-muted" style="color:black;">Go To</h3>
						<hr>

			<!--                         Main Content of Supervisor      -->
{{-- URL::route('timesheetsView');--}}
{{-- URL::route('timesheets.index');--}}
                 
                  
                    <div align="center">
                      <a href="{{URL::route('issuedTimesheet')}}" style="width:50%" class="btn btn-action" >
                        <h5>Fill Timesheet</h5>
                      </a> 
                    </div>
                      </br></br>
                    <div align="center">
                      <a href="{{URL::route('pendingTimesheets')}}" style="width:50%" class="btn btn-action" align="center">
                        <h6>Review Timesheets</h6>
                      </a>
                    </div>
                    </br></br>
                    <div align="center">
                      <a href="#" class="btn btn-action" style="width:50%" align="center">
                        <h6>Old Personal</h6>
                      </a>
                    </div>
                  
              

		        </div>
	        </div>
        </div>
			</div>
				
			</article>
</div>	<!-- /container -->

@stop