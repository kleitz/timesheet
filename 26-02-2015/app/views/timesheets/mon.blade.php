<div class="container" style="text-decoration-color: black; height:450px; width:100%;">

<table class="table" style="max-width:90%; padding: 20%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
        
           <tbody>
            
   
               
            <tr>
            <td style="max-width:40%"> 
                User Id{{ form::text('id','',['class' => 'form-control'])}}
            </td><td></td><td></td><td></td>
           
            <!-- <td style="max-width:40%">submission date {{ form:: text('subdate','',['class' => 'form-control'])}}  </td>  -->
           
            <!-- <td style="max-width:40%">Timesheet Id{{ form:: text('id','',['class' => 'form-control'])}}  </td>
            <td style="max-width:40%"> </td> -->

    
    <tr style= "background-color: grey; color: white">
            
    <td> </td>  <td> <h4 style="float:right; font-style:bold">Enter Your Progress </h4></td>  <td> </td>  <td></td>        
    </tr> 
    

    

    <tr >
      <th>  Tasks  </th>
            <th>  Time Spent  </th>
            <th>  Date  </th>
            <th>  Description  </th>
           
     </tr>        
    @foreach($tasks as $tk) 
<tr style=" margin-top:8%">
 
         <td > 
           
             {{ Form::input('task_name', '$tk->task_name', null, array('class' =>'form-control','required' => 'true')) }}
            </td>
  </td>


  <td>
 {{Form::selectRange('time_spent', 1, 200);}}
     Minutes</td>
            

            <td>
                {{ Form::input('date', 'date', null, array('placeholder' => 'mm/dd/yyyy', 'id' => 'date', 'class' =>'form-control' )) }}
            </td>
           
            <td >
              {{ form::text('description', '', ['class' => 'form-control','style' =>'max-width:50%']) }}
            
           
</td>          </tr>




</tbody>
@endforeach
</table>
  
  <div1 style="margin-left: 43%">
{{ Form::submit('Save',['class' => 'btn btn-primary btn-sm']) }}

      </div1>
      </div>