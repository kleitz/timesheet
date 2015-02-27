@extends('licennses.layouts.main')


@section('navbar')
          <li><a href="phome">Create Timesheet</a></li>
          <li class="active"><a href="#">Fill Timesheet</a></li>
          <li><a href="#">Pending Timesheets</a></li>
          <li><a href="#">Old Personal Timesheets</a></li>
          <li><a href="#">Accepted Timesheets</a></li>
          <li><a class="btn" href="index">SIGN OUT</a></li>
@endsection


@section('content')
<h4 style='margin-left:80.7%; margin-right:6%; margin-top:1%; margin-bottom:-1%' >Welcome! Asad Ullah</h4>
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

{{ form::model($timesheet,['route'=> ['timesheets.update', $timesheet->id], 'method' => 'put' , 'id' => 'tsheet'])}}

      <!-- Article main content -->
                       
      <!-- /Article -->
      
      <!-- Sidebar -->
      

        
      <!-- /Sidebar -->

    

<table class="table" style="max-width:90%; padding: 20%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
        
           <tbody>
            
    <tr>
            <td> 
                <h4>timesheet</h4>
            </td>
            <td>  </td> <td> </td> <td> </td>
    </tr>  
               
            
        
    <tr >
            <th>  Tasks  </th>
            <th>  Time Spent  </th>
            <th>  Date  </th>
            <th>  Description  </th>
          
          
            
          
    </tr> 
         <!--  {{$packageinfo = new PackageInfo();}}     -->  
        
<tr >
  
         <td > 
              {{ Form::input('text', 'Task', null, array('required' => 'true')) }} </td>
            </td>
  </td>


  <td style="max-width:50%;">
 {{Form::selectRange('time_spent', null,array('required' => 'true') )}}
     Minutes</td>
     
            <td style="max-width:50%;">
                
 {{ Form::input('date', 'date', null, array('required' => 'true')) }} </td>

            
           
            <td style="max-width:50%;">
            	 {{ Form::input('text', 'Task', null, array('required' => 'true')) }} </td>
            <input type="text" name="description" class="form-control" > 
           
</td>          </tr>



        
        </tbody>
      </table>
      <div1 style="margin-left: 43%">
{{ Form::submit('Update',['class' => 'btn btn-primary btn-sm']) }}
      </div1>
      {{ Form::close() }}
     </div>


@stop