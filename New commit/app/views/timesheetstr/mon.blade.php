<div class="container" style="text-decoration-color: black; height:450px; width:100%;">

<table class="table" style="max-width:90%; padding: 20%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
        
           <tbody>
            
   
               
            <tr>
            <td style="max-width:40%"> 
                User Id{{ form::text('id','',['class' => 'form-control'])}}
            </td>
           
            <td style="max-width:40%">submission date {{ form:: text('subdate','',['class' => 'form-control'])}}  </td> 
           
            <td style="max-width:40%">Timesheet Id{{ form:: text('ts_id','',['class' => 'form-control'])}}  </td>
            <td style="max-width:40%"> </td>

    
    <tr style= "background-color: grey; color: white">
            
    <td> </td>  <td> <h4 style="float:right; font-style:bold">Enter Your Progress </h4></td>  <td> </td>  <td></td>        
    </tr> 
    
<tr>
            
    <td style="background-color: grey; color: white; font-style:bold"><h4>Day1 </h4> </td>  <td> </td>  <td> </td>  <td></td>        
    </tr> 
    

    <tr >
      <th>  Tasks  </th>
            <th>  Time Spent  </th>
            <th>  Date  </th>
            <th>  Description  </th>
           
     </tr>        
     
<tr style=" margin-top:8%">
  
         <td > 
           {{ form:: text('task','',['class' => 'form-control', 'style' => 'max-width:50%'])}}
             
            </td>
  </td>


  <td>
 {{Form::selectRange('time_spent', 1, 200);}}
     Minutes</td>
            <td>
                {{ form::text('date','',['class' => 'form-control', 'style' => 'max-width:50%'])}}
            </td>
           
            <td >
              {{ form::text('description', '', ['class' => 'form-control','style' =>'max-width:50%']) }}
            
           
</td>          </tr>

<tr>
            
    <td style="background-color: grey; color: white; font-style:bold"><h4>Day2 </h4> </td>  <td> </td>  <td> </td>  <td></td>        
    </tr> 
    

    <tr >
      <th>  Tasks  </th>
            <th>  Time Spent  </th>
            <th>  Date  </th>
            <th>  Description  </th>
           
     </tr>        
     
<tr style=" margin-top:8%">
  
         <td > 
           {{ form:: text('task','',['class' => 'form-control', 'style' => 'max-width:50%'])}}
             
            </td>
  </td>


  <td>
 {{Form::selectRange('time_spent', 1, 200);}}
     Minutes</td>
            <td>
                {{ form::text('date','',['class' => 'form-control', 'style' => 'max-width:50%'])}}
            </td>
           
            <td >
              {{ form::text('description', '', ['class' => 'form-control','style' =>'max-width:50%']) }}
            
           
</td>          </tr>

<tr>
            
    <td style="background-color: grey; color: white; font-style:bold"><h4>Day3 </h4> </td>  <td> </td>  <td> </td>  <td></td>        
    </tr> 
    

    <tr >
      <th>  Tasks  </th>
            <th>  Time Spent  </th>
            <th>  Date  </th>
            <th>  Description  </th>
           
     </tr>        
     
<tr style=" margin-top:8%">
  
         <td > 
           {{ form:: text('task','',['class' => 'form-control', 'style' => 'max-width:50%'])}}
             
            </td>
  </td>


  <td>
 {{Form::selectRange('time_spent', 1, 200);}}
     Minutes</td>
            <td>
                {{ form::text('date','',['class' => 'form-control', 'style' => 'max-width:50%'])}}
            </td>
           
            <td >
              {{ form::text('description', '', ['class' => 'form-control','style' =>'max-width:50%']) }}
            
           
</td>          </tr>

<tr>
            
    <td style="background-color: black; color: white; font-style:bold"><h4>Day4 </h4> </td>  <td> </td>  <td> </td>  <td></td>        
    </tr> 
    

    <tr >
      <th>  Tasks  </th>
            <th>  Time Spent  </th>
            <th>  Date  </th>
            <th>  Description  </th>
           
     </tr>        
     
<tr style=" margin-top:8%">
  
         <td > 
           {{ form:: text('task','',['class' => 'form-control', 'style' => 'max-width:50%'])}}
             
            </td>
  </td>


  <td>
 {{Form::selectRange('time_spent', 1, 200);}}
     Minutes</td>
            <td>
                {{ form::text('date','',['class' => 'form-control', 'style' => 'max-width:50%'])}}
            </td>
           
            <td >
              {{ form::text('description', '', ['class' => 'form-control','style' =>'max-width:50%']) }}
            
           
</td>          </tr>


</tbody>
</table>
  
  <div1 style="margin-left: 43%">
{{ Form::submit('Save',['class' => 'btn btn-primary btn-sm']) }}

      </div1>
      </div>