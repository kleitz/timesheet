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
							<h3 class="text-center text-muted" style="color:black;">Assign Timesheet</h3>
							
              <p class="text-center text-muted" >(Please Click Post Timesheet Button After Creating Timesheet)</p>
		
                <hr>

<table class='table'>
           @foreach( $users as $user )
                    
                        <tr>
                            {{-- Form::open(array('action' => array('TasksController@edit', $user->id))) --}}                            
                            <td style="color:black; background-color:white; border-color:#bbb;">
                                <h4>{{ link_to('' , $user->user_name , [$user->id , 'style' => 'color:black'] )  }}</h4>
                            </td>
                                  {{--, ['style="color:black"']--}}
                          {{--   <td style="color:black; background-color:white; border-color:white;">
                                <h4>{{ link_to('' , $user->active , [$user->id] )  }}</h4>
                            </td>
 --}}
                            <!-- <td style="color:black; background-color:white; border-color:#bbb;">
                                <div>
                                  <!--      array('id'=>[$user->id]),       -->
                    				    {{-- link_to_route('timesheets.edit', 'Create Timesheet', [$user->id], ['class=" btn btn-action btn-xs"'] )--}}
                                                                      <!---[$user->id],-->
                  				     <!--/div>
                               {{--  {{link_to_route('createTimesheet' , 'Create Timesheet', [$user->id] , ['class' => 'button btn-xs btn-action' ,'style'=>"color:#333;"] )}} --}}
                                
                            </td>
 -->



              {{Form::model($user,['route'=> ['timesheets.edit', $user->id], 'method' => 'GET'])}}
                {{-- Form::open(array('action' => 'timesheets.store',  'id' => 'tsheet')) --}}
                              
                                <td style="color:black; background-color:white; border-color:#bbb;" align="center" style="width:80%">
                                   {{Form::input('date', 'date', null , ['type'=>'text' , 'class'=>'form-control datepicker'])}}
                                </td>

                                <td style="color:black; background-color:white; border-color:#bbb;" align="center" style="width:80%">
                                     <button class="button btn-action btn-sm" type="submit">Create Timesheet</button>
                                </td>



                {{ Form::close()}}






                            <!-- <td style="color:black; background-color:white; border-color:white;">
                              <div>
                                {{--link_to_route('tasks.edit', 'Post Timesheet', [$user->id], ['class=" btn btn-action btn-xs"'])--}}
                              </div>
                            </td> -->
                            {{--Form::close()--}}
                        </tr>


            @endforeach
</table>                <!--div class="row">
                  <div class="col-lg-8">
                    <label class="checkbox">
                      <input type="checkbox" required>  
                      I've read the <a href="page_terms">Terms and Conditions</a>
                    </label>                        
                  </div>
                  <div class="col-lg-4 text-right">
                    <button class="btn btn-action" type="submit">Save</button>
                  </div>
                </div-->
         

		</div>
	</div>
</div>
				</div>
				
			</article>
</div>	<!-- /container -->



 <!--script>
// 	$(document).ready(function() {
//     var max_fields      = 21; //maximum input boxes allowed
//     var wrapper         = $(".input_fields_wrap"); //Fields wrapper
//     var add_button      = $(".btn-action"); //Add button ID
   
//     var x = 1; //initlal text box count
//     $(add_button).click(function(e){ //on add input button click
//         e.preventDefault();
//         if(x < max_fields){ //max input box allowed
//             x++; //text box increment
//             $(wrapper).append('<div><input type="text" style="width:80%" class="form-control" name="mytext[]"/><a href="#" class="remove_field">Remove</a><a href="{{URL::route('addTasks')}}" class="btn-action">Save</a></div>'); //add input box
//         }
//     });
   
//     $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
//         e.preventDefault(); $(this).parent('div').remove(); x--;
//     })
// });
// </script-->


<script>
$(function() {
   $( "#date" ).datepicker();
 });
</script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

@stop