@extends('timesheets.layouts.main')
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
          <li class="dropdown"><a href="#">Fill Timesheet </a></li>
          <li class="active"><a href="euserd.blade.php">View Pending</a></li>
					<!--<li><a href="accepted.html">Accepted Timesheets</a></li>-->
				<li><a class="btn" href="index">SIGN OUT</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

<div class="container" style="text-decoration-color: black; height:450px; width:100%;">

<table class="table" style="max-width:90%; padding: 20%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
        
           <tbody>
            
   
               
            <tr>
            <td style="max-width:40%"> 
                User Id{{ form::text('id','',['class' => 'form-control'])}}
            </td>
           
            <!-- <td style="max-width:40%">submission date {{ form:: text('subdate','',['class' => 'form-control'])}}  </td>  -->
           
            <!-- <td style="max-width:40%">Timesheet Id{{ form:: text('id','',['class' => 'form-control'])}}  </td>
            <td style="max-width:40%"> </td> -->

    
    <tr style= "background-color: grey; color: white">
            
    <td> </td>  <td> <h4 style="float:right; font-style:bold">Enter Your Progress </h4></td>  <td> </td>  <td></td>        
    </tr> 
    

    

    
{{ Form::submit('Save',['class' => 'btn btn-primary btn-sm']) }}

      </div1>
      </div>





 @stop 
