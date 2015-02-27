@extends('layouts.super_user')



@section('navbar')

            <li class='active'><a href="{{URL::route('superUserHome')}}">Manage Employees</a></li>
            <li><a href="{{URL::route('manageTimesheets')}}">Manage Timesheet</a></li>
            <li><a href="{{URL::route('pendingTimesheet')}}">Pending Timesheet</a></li>
            <li><a href="#">View Reports</a></li>
            <li><a class="btn" href="{{URL::route('account-sign-out')}}">SIGN OUT</a></li>
@endsection




@section('content')
	<h4 style='margin-left:80.7%; margin-right:6%; margin-top:1%; margin-bottom:-1%' >Hello {{Auth::user()->user_name}}!</h4>
<script>
$(function($) {
        //tooltip init
        $('#exampleTooltip').tooltip();
      

        //datepicker
        $('#datepickerDate').datepicker({
          format: 'mm-dd-yyyy'
        });

        $('#datepickerDateComponent').datepicker();
        
        //daterange picker
        $('#datepickerDateRange').daterangepicker();
        
        //timepicker
        $('#timepicker').timepicker({
          minuteStep: 5,
          showSeconds: true,
          showMeridian: false,
          disableFocus: false,
          showWidget: true
        }).focus(function() {
          $(this).next().trigger('click');
        });

        
      });
</script>
<script>
   document.getElementById('date').value = (new Date()).format("m/dd/yy");
</script>
<div class="container" style="text-decoration-color: black; height:450px; width:100%;">
<!--<img src="assets/images/image4.png"  height="450" width="1400" alt="1image" style='opacity: 0.5;position: fixed; '/>-->

      <!-- Article main content -->
                       
      <!-- /Article -->
      
      <!-- Sidebar -->
      

        
      <!-- /Sidebar -->

    

<article class="col-xs-12 maincontent" style="width:80%; margin-left:10%; margin-top:20px;" >
        
          
        
        
      <div >
        <div class="panel panel-default">
          <div class="panel-body">
           <h3 class="text-center text-muted" style="color:black;">Pending Timesheets</h3>
              <hr><!-------------------------Horizontal Line in Form---------------------------->


<table>
       
    <thead>
        <tr >
          <th style="color:white; background-color:black; border-color:black;">Employee Name</th>
          <th style="color:white; background-color:black; border-color:black;"></th>
          <!-- <th style="color:white; background-color:black; border-color:black;">Update Employee</th>  -->
        </tr>
    </thead>

    <tbody>
    
       
      @foreach( $users as $user )
          
            <tr>
                  
                  <td style="color:black; background-color:white; border-color:black;">
                      <h4>{{ link_to('' , $user->user_name , [$user->id] )  }}</h4>
                  </td>


                      
                 
                  <td style="color:black; background-color:white; border-color:black;">
                
                    {{link_to_action('TimesheetsController@reviewTimesheet', 'Pending Timesheets', [$user->id], ['class'=>'button btn-action btn-sm']);}}
                    
                  </td>

            </tr>


      @endforeach
     
  </tbody>


</table>
                        
                      </div>
                    </div>
        </div>
        
    </article>
     
    
</div>	

	

@endsection