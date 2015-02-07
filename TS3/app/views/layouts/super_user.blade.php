
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Super User Home - Timesheet</title>

	<link rel="shortcut icon" href="assets\images\sci_fi_saturn_clock_logo.jpg">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

        
        
        <!--CSS links for tab in the users page-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="assets/css/style.css"> <!-- Resource style -->
<!--	<script src="js/modernizr.js"></script>  Modernizr -->
  	
        
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
        
<!-----------------------------------SCRIPTS AND CSS LINKS FOR THE TABLE OF CONTENTS -------------------------------->
            <style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 10%; 
                        
		}
		
		td:before { 
			/* Now like a table header */
			
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "Enable/Disable"; }
		td:nth-of-type(2):before { content: "Functionality"; }
		td:nth-of-type(3):before { content: "Level 1"; }
		td:nth-of-type(4):before { content: "Level 2"; }
		td:nth-of-type(5):before { content: "Level 3"; }
		td:nth-of-type(6):before { content: "Level 4"; }
		
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
	
	</style>
    
<!-----------------------------------SCRIPTS AND CSS LINKS FOR THE TABLE OF CONTENTS ENDS HERE-------------------------------->
</head>

<body>
	<!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets\images\sci_fi_saturn_clock.jpg" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Set Hierarchy</a></li>
					<li><a href="#">Employee Management</a></li>
					<li class="dropdown"><a href="#">Project Planning</a></li>
					<li><a href="#">Timesheet Management</a></li>
                                        <li><a href="#">View Reports</a></li>
					<li><a class="btn" href="index.html">SIGN OUT</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="SuperUser.html">Super-User Home</a></li>
                        <li class="active">Set Hierarchy</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			
			<!-- /Article -->
			
			<!-- Sidebar -->
			

				
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->

<!--Every other content instead of menu bar header and footer must be placed inside this following div-->

<!--------------RESPONSIVE TABLE having CSS DEFINED IN style.css PAGE in css folder of SiteRoot Directory------------>

    
 <input type="submit" name="submit" value="Add New Level" class="btn btn-xs" 
 		style="margin-left:5%; margin-top:2%;   
 				background: -webkit-linear-gradient(top, #999, #333);
  				background: -moz-linear-gradient(top, #999, #333);
  				background: -o-linear-gradient(top, #999, #333);
  				background: linear-gradient(to bottom, #999, #333);
				color:#DDD;
				text-shadow: 0 2px rgba(0, 0, 0, 0.8);
  "></br></br>
	<table>
   

		
		<thead>
				<tr>
					<th>Levels of Hierarchy</th>
					<th>Define Hierarchy</th>
					<th>Check Reports</th>
					<th>Employee Management</th>
					<th>Timesheet Management</th>
					<th>Create Timesheets</th>
					<th>Approve Timesheets</th>
					
				</tr>
		</thead>       
		{{--@yield('switch')--}}
		<tbody>
		<tr>			<td>Level 1</td>
	                    <td>
	                        <!--------------CSS IN MAIN.CSS---------------->
	                         <div class="switch switch switch-gray">
                              <input type="radio" class="switch-input" name="view0" value="week0" id="week0" checked>
                              <label for="week0" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view0" value="week0"  id="month0">
                              <label for="month0" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
	                    </td>
			
                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-gray">
                              <input type="radio" class="switch-input" name="view1" value="week1" id="week1" checked>
                              <label for="week1" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view1" value="week1"  id="month1">
                              <label for="month1" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>


                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-gray">
                              <input type="radio" class="switch-input" name="view2" value="week2" id="week2" checked>
                              <label for="week2" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view2" value="week2"  id="month2">
                              <label for="month2" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>
                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-gray">
                              <input type="radio" class="switch-input" name="view3" value="week3"  id="week3" checked>
                              <label for="week3" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view3" value="week3"  id="month3">
                              <label for="month3" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>
                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-gray">
                              <input type="radio" class="switch-input" name="view4" value="week4"  id="week4" checked>
                              <label for="week4" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view4" value="week4"  id="month4">
                              <label for="month4" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>
                        <td>
                            <!--------------CSS IN MAIN.CSS---------------->
                            <div class="switch switch switch-gray">
                              <input type="radio" class="switch-input" name="view5" value="week5"  id="week5" checked>
                              <label for="week5" class="switch-label switch-label-off">Disable</label>
                              <input type="radio" class="switch-input" name="view5" value="week5"  id="month5">
                              <label for="month5" class="switch-label switch-label-on">Enable</label>
                              <span class="switch-selection"></span>
                            </div>
                        </td>
			
		</tr>
                
		
                
		</tbody>
	</table>

s
<!--Every other content instead of menu bar header and footer must be placed inside this above div-->
		
		
		
<!------------------------footer------------------------------>
    <footer id="footer" class="top-space navbar-fixed-bottom">
    <div class="footer2 " style="margin-top:2%; " > 
        <!-- navbar-fixed-bottom  can be used if we want navigation bar fixed at bottom-->
      
        
          
            <div class="col-md-6 widget" style="padding-left:2.5%;">
              <div class="widget-body">
                <p class="simplenav">
                  <a href="#">Home</a> | 
                  <a href="about.html">About The Product</a> |
                  <a href="sidebar-right.html">Sidebar</a> |
                  <a href="contact.html">Contact</a> |
                  <b><a href="signup.html">Sign up</a></b>
                  
                </p>
              </div>
            </div>

          
              
              
         	

         	<p class="simplenav" style="padding-left:3%; margin-top:.25%;">Follow Us
                <a href="" style="padding-left:.5%;"><i class="fa fa-twitter fa-2"></i></a>
                <a href="" style="padding-left:.5%;"><i class="fa fa-dribbble fa-2"></i></a>
                <a href="" style="padding-left:.5%;"><i class="fa fa-github fa-2"></i></a>
                <a href="" style="padding-left:.5%;"><i class="fa fa-facebook fa-2"></i></a>
                
     	    </p> 


     	    <p style="padding-left:2.5%; margin-top:.5%">       
  				Copyright &copy; 2014, UniSYS Tech. Designed by <a href="http://gettemplate.com/" rel="designer">UniSYS Tech.</a> 
         	</p> 
    </div>
        </footer>
<!----------------------------end of footer-------------------------->

	




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>