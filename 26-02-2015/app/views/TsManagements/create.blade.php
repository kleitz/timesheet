@extends('TsManagements.layouts.main')
@section('content')
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets\images\sci_fi_saturn_clock.jpg" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
          <li class="dropdown"><a href="phome">Home</a></li>
					<li class="active"><a href="#">Product Settings</a></li>
					<li><a href="lholders">License holders </a></li>
					<li class="dropdown"><a href="tusers">trial version users</a></li>
					<!--<li><a href="accepted.html">Accepted Timesheets</a></li>-->
					<li><a class="btn" href="index">SIGN OUT</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>




{{ Form::open(array('action' => 'TsManagements.store',  'id' => 'tman')) }}   
      <div class="container" style="text-decoration-color: black; height:450px; width:100%;">

<table class="table" style="max-width:90%; padding: 20%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
    

           <tbody>
            
   <tr style= "background-color: grey; color: white"><td>
    <h4>Enter Your Progress </h4>        
            </td><td></td>
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
           <input class="form-control" type="date" name="review_deadline" >
             
            </td>
          </tr>

 
          <tr>
    <th>Created By</th>
    <td > 
           <input class="form-control" type="text" name="created_by" >
             
            </td>
          </tr>
               
            
           




</tbody>
</table>
  
  <div1 style="margin-left: 43%">
    <a href="{{ URL::route('tasks.index') }}" class="btn btn-primary btn-sm" style="  max-width: 20%">Add Tasks</a></div1>
{{ Form::submit('Save',['class' => 'btn btn-primary btn-sm']) }}

      </div1>
      </div>

    

 {{ Form::close() }}
 
              
 @stop