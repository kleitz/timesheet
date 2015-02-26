<div class="container" style="text-decoration-color: black; height:450px; width:100%;">

<table class="table" style="max-width:90%; padding: 20%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
    

           <tbody>
            
   <tr style= "background-color: grey; color: white">
    <h4 style="float:right; font-style:bold">Enter Your Progress </h4>        
            
    </tr> 

     
            
           
             
     <tr>
    <th>Submission Date</th>
    <td > 
           <input class="form-control" type="date" name="submition_date" >
             
            </td>
          </tr>

           <tr>
    <th>Review Date</th>
    <td > 
           <input class="form-control" type="text" name="created_by" >
             
            </td>
          </tr>

 
          <tr>
    <th>Review Date</th>
    <td > 
           <input class="form-control" type="date" name="created_by" >
             
            </td>
          </tr>
               
            
           




</tbody>
</table>
  
  <div1 style="margin-left: 43%">
    <a href="{{ URL::route('tasks.index') }}" class="btn btn-primary btn-sm" style="  max-width: 20%">Add Tasks</a></div1>
{{ Form::submit('Save',['class' => 'btn btn-primary btn-sm']) }}

      </div1>
      </div>