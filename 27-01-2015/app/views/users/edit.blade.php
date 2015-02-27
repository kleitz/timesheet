@extends('layouts.super_user')



@section('navbar')
	
	<li class='active'><a href="{{URL::route('superUserHome')}}">Manage Employees</a></li>
	<li><a href="{{URL::route('manageTimesheets')}}">Manage Timesheet</a></li>
  <li><a href="{{URL::route('pendingTimesheet')}}">Pending Timesheet</a></li>
    <li><a href="#">View Reports</a></li>
	<li><a class="btn" href="{{URL::route('account-sign-out')}}">SIGN OUT</a></li>

@stop


@section('content')






<div class="container">

		<h4 style="margin-left:80%; color:black;">Hello {{Auth::user()->user_name}}!</h4>
    <ol class="breadcrumb" style="margin-top:-1%;">
			<li><a href="SuperUser">Super-User Home</a></li>
                        <li><a href="set_hierarchy">Manage Employees</a></li>
								 <li class="active">Edit Employees</li>
		</ol>

		<div class="row">


<article class="col-xs-12 maincontent">
				
					<h2 class="text-muted" style="color:black;">Edit Employee</h2>
				
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="text-center text-muted" style="color:black;">Edit</h3>
							<hr>

			{{Form::model($user , array('route'=>['users.update' , $user->id] , 'method' =>'PATCH'))}}
                <div class="top-margin">
                  <label>Employee Name<span class="text-danger">*</span></label>
                   {{ form::text('user_name', null ,['class' => 'form-control'])}}
                  <h5> @if($errors->has('user_name'))
                          {{$errors->first('user_name')}}
                   @endif</h5>
                </div>
                
                <div class="top-margin">
                  <label>Email<span class="text-danger">*</span></label>
                  {{ form::email('email', null ,['class' => 'form-control'])}}
                   <h5> @if($errors->has('email'))
                          {{$errors->first('email')}}
                   @endif</h5>
                </div>

				        <div class="top-margin">
                  <label>Designation</label>
                  {{ form::text('designation', null ,['class' => 'form-control'])}}
                   <h5> @if($errors->has('designation'))
                          {{$errors->first('designation')}}
                   @endif</h5>
                </div>
                
 			        	<div class="top-margin">
                  <label>Skills</label>
                  {{ form::text('skills', null ,['class' => 'form-control'])}}
                   <h5> @if($errors->has('skills'))
                          {{$errors->first('skills')}}
                   @endif</h5>
                </div>
                
                 <div class="top-margin">
                  <label>Role<span class="text-danger">*</span></label>
                  {{Form::select('role' , array('supervisor' => 'Supervisor', 'subordinate' => 'Subordinate' ))}}
                   <h5> @if($errors->has('role'))
                          {{$errors->first('role')}}
                   @endif</h5>
                </div>

                <div class="top-margin">
                  <label>Status<span class="text-danger">*</span></label>
                  {{Form::select('active', array('inactive' => 'Disable', 'active' => 'Enable'))}}
                </div>


                <div class="top-margin">
                  <label>Address<span class="text-danger">*</span></label>
                  {{ form::text('address', null ,['class' => 'form-control'])}}
                  <h5> @if($errors->has('address'))
                          {{$errors->first('address')}}
                   @endif</h5>
                </div>  


                <div class="top-margin">
                  <label>Password<span class="text-danger">*</span></label>
                  <input type="text" placeholder="Enter Password" name="password" class="form-control" required>
                  <h5> @if($errors->has('password'))
                          {{$errors->first('password')}}
                   @endif</h5>
                </div>
                

                <hr>

                <div class="row">
                  <div class="col-lg-8">
                    <!-- <label class="checkbox">
                      <input type="checkbox" required>  
                      I've read the <a href="page_terms">Terms and Conditions</a>
                    </label>  -->                       
                  </div>
                  <div class="col-lg-4 text-right">
                    <button class="btn btn-action" type="submit">Save</button>
                  </div>
                </div>
            {{Form::close()}}

		</div>
	</div>
</div>
				</div>
				
			</article>
</div>	<!-- /container -->

@stop