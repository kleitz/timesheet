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
      @foreach($timesheets as $timesheet)     
<tr >
                             
         <td > 
               <input class="form-control" type="text" name="task" placeholder="task" value="{{$timesheet->task}}"style="max-width:50%;"> </td>
           
  


             <td>
              <input class="form-control" type="text" name="time_spent" value="{{$timesheet->time_spent}}" style="max-width:50%;"> Minutes</td>
 
     
            <td>
                <input type ="" id="date" name="date" value="{{$timesheet->date}}" style="max-width:50%;">


            </td>
           
            <td >
            <input type="text" name="description" class="form-control" value="{{$timesheet->description}}"style="max-width:50%;"> 
           
</td>          
                    
</tr>

@endforeach 

        
        </tbody>
      </table>
<div1>
<a href="{{ URL::route('timesheets.edit', array('id'=>$timesheet->id)) }}" class="btn btn-primary btn-sm"style="margin-left: 40%;margin-top: 5%;max-width: 20%;"><h5>Edit</h5></a></div1>     
    
</div>

@stop