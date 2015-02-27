@extends('layouts.super_user')



@section('navbar')
	
	<li><a href="/buildOrg">Organization Details</a></li>
	<li ><a href="/functionalities">Set Hierarchy</a></li>
	<li class='active'><a href="#">Project Planning</a></li>
	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Management<b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="sidebar-left">Employee Management</a></li>
			<li><a href="sidebar-right">Timesheet Management</a></li>
		</ul>
	</li>
    <li><a href="#">View Reports</a></li>
	<li><a class="btn" href="index">SIGN OUT</a></li>

@stop


@section('content')






<div class="container">

		<ol class="breadcrumb">

			<li><a href="/functionalities">Super-User Home</a></li>
								 <li class="active"> Project Planning</li>
		</ol>

		<div class="row">


<article class="col-xs-12 maincontent">
				
					<h2 class="text-muted" style="color:black;">Plan Your Projects</h2>
				
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="text-center text-muted" style="color:black;">Project Tasks</h3>
							
							<hr>
							
							<div class="col-lg-12 text-center">


                    			<button  type="button" class="btn btn-action" style="width:50%;">Create Project</button>
                  			<hr>
                  				<button id="1" onclick="method()" class="btn btn-action" style="width:50%;"type="button">Current Projects</button>
               				<hr>
	               				<button id="b2" class="btn btn-action" type="button" style="width:50%;">Completed Projects</button>
	               			<hr>
                  				<button id="b3" class="btn btn-action" type="button" style="width:50%;">Team Management</button>



                  			</div>


		</div>
	</div>
</div>
				</div>
				
			</article>
</div>	<!-- /container -->





@stop