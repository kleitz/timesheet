@extends('licennses.layouts.main')

@section('content')

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


   
   
   {{ Form::open(array('action' => 'timesheets.store',  'id' => 'tsheet')) }}   
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
               
            <tr>
            <td style="max-width:40%"> 
                User Id<input type="text" name="id" >
            </td>
           
            <td style="max-width:40%">submission date <input type="text" name="subdate">  </td> 
           
            <td style="max-width:40%"> </td>
            <td style="max-width:40%"> </td>

    
    <tr style= "background-color: black; color: white">
            
    <td> </td>  <td> <h3 style="float:right; font-style:bold">Enter Your Progress </h3></td>  <td> </td>  <td></td>        
          
            
          
    </tr> 
    
    <tr >
      <th>  Tasks  </th>
            <th>  Time Spent  </th>
            <th>  Date  </th>
            <th>  Description  </th>
           
     </tr>        <!--  {{$packageinfo = new PackageInfo();}}     -->  
        
<tr style=" margin-top:8%">
  
         <td > 
           <input class="form-control" type="text" name="task" placeholder="task" style="max-width:50%;">
             
            </td>
  </td>


  <td>
 {{Form::selectRange('time_spent', 1, 200);}}
     Minutes</td>
            <td>
                <input type ="date" id="date" name="date" style="max-width:50%;">


            </td>
           
            <td >
            <input type="text" name="description" class="form-control" style="max-width:50%;"> 
           
</td>          </tr>



        
        </tbody>
      </table>
      <div1 style="margin-left: 43%">
{{ Form::submit('Save',['class' => 'btn btn-primary btn-sm']) }}
      </div1>
 {{ Form::close() }}
    </div>
     

@stop