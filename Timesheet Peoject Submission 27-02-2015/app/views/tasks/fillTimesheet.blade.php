@extends('layouts.super_user')

@section('navbar')
          
            <li><a href="{{URL::route('supervisorHome')}}">Home</a></li>
            <li class="active"><a href="{{URL::route('issuedTimesheet')}}">Fill Timesheet</a></li>
            <li><a href="{{--URL::route('#')--}}">Accepted Timesheets</a></li>
            <li><a href="{{URL::route('pendingTimesheets')}}">Review Timesheets</a></li>
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
<div class="container" style="text-decoration-color: black; width:100%;">
<!--<img src="assets/images/image4.png"  height="450" width="1400" alt="1image" style='opacity: 0.5;position: fixed; '/>-->

      <!-- Article main content -->
                       
      <!-- /Article -->
      
      <!-- Sidebar -->
      

        
      <!-- /Sidebar -->

    

<article class="col-xs-12 maincontent" style="width:80%; margin-left:10%; margin-top:20px;" >
        
          
        
        
      <div >
        <div class="panel panel-default">
          <div class="panel-body">
           <h3 class="text-center text-muted" style="color:black;">Assigned Tasks</h3>
              <hr><!-------------------------Horizontal Line in Form---------------------------->


<table  class="table">
       
    <thead>
        <tr>
          <th style="color:white; background-color:black; border-color:black;">Task Name</th>
          <th style="color:white; background-color:black; border-color:black;">Time Spent</th>
          <th style="color:white; background-color:black; border-color:black;">Description</th>
          <th style="color:white; background-color:black; border-color:black;">Update</th>
        </tr>
    </thead>

    <tbody>
 {{--link_to_action('TimesheetsController@submitTimesheet' , 'Submit Timesheet' , [Auth::user()->user_id] , ['class="btn btn-action"'])--}}
{{link_to_route('timesheets.index' , 'Back To Fill Timesheet Index' , null,['class="btn btn-action"'])}}
      </br></br> 
      @foreach( $tasks as $task )
          
            <tr>
  {{Form::model($task,['route'=> ['tasks.update', $task->id], 'method' => 'PUT'])}}
  {{-- Form::open(array('action' => 'timesheets.store',  'id' => 'tsheet')) --}}
                  <td style="color:black; background-color:white; border-color:black;">
                      <!-- <h6>{{ link_to('' , $task->task_name , [$task->id] , ['style' => "color:black;"] )  }}</h6> -->
                      <h5>{{$task->task_name}}</h5>
                  </td>

                  <td style="color:black; background-color:white; border-color:black;">
                
                    {{Form::selectRange('time_spent', 1, 200 , null , ['class'=>'form-control']);}}
                    
                  </td>


                  <td style="color:black; background-color:white; border-color:black;" align="center" style="width:80%">
                     {{Form::text('description' , null , ['class'=>'form-control'])}}
                  </td>

                  <td style="color:black; background-color:white; border-color:black;" align="center" style="width:80%">
                       <button class="button btn-action btn-sm" type="submit">Save Task</button>
                  </td>



  {{ Form::close()}}
            </tr>


      @endforeach
  
     
  </tbody>


</table>
                        
                      </div>
                    </div>
        </div>
        
    </article>
     
    
</div>

@stop