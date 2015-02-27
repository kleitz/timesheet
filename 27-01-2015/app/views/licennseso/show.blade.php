D:\xampppp\htdocs\TS\app/views/licennses/index.blade.php

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Product owners view</title>

	<link rel="shortcut icon" href="assets\images\sci_fi_saturn_clock_logo.jpg">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link href="assets/css/Table.css" rel="stylesheet" type="text/css"/>
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

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

	<!-- container -->
	<div class="container" style="text-decoration-color: black; height:450px; width:100%;">
<!--<img src="assets/images/image4.png"  height="450" width="1400" alt="1image" style='opacity: 0.5;position: fixed; '/>-->



			
			<!-- Article main content -->
                       
			<!-- /Article -->
			
			<!-- Sidebar -->
			

				
			<!-- /Sidebar -->

		
  
			
			        
            
	

   


<table class="table" style="max-width:90%; alignment-adjust: central; border-style: inset;
       border-width: 4px; border-color: darkgrey; margin-top: 2%; margin-left: 5%;">
        
           <tbody>
           	
      <tr>
            <td> 
                <h3>Product Information</h3>
            </td>
      </tr>
               
               
              
        
        
        <tr >
            <td  >     
             License Period
            </td>
            <td > 
                {{$licennses->license_period}}
          </tr>       
        
<tr >
            <td  >     
            Trial Period
            </td>
            <td > 
            {{$licennses->trial_period}}    
        </tr>    

         <tr>
            <td >Expiry Notification Before </td>
            <td > {{$licennses->notify_before}}</td>
          </tr>



        <tr>
            <td> 
                <h3>Package Information</h3>
            </td>
      </tr>
    
<!--         ------  -------------------------package setting-------------------------------------->
          <tr >
              <td >
                   Select the package
     </td>
    
    <td >
                
                    
                   <select class="form-control"   name="package_name">
                        <option   value="standard">Standard</option>
                        <option   value="premium">Premium</option>
                        <option  value="enterprise">Enterprise</option>
                    </select>  
   
    
                 
    </td>
          </tr>
          
          <tr >
            <td >Price of the Package</td>
           
            <td>{{$packageinfos->package_price}}</td>
          </tr>
         
           <tr>
          <td>

          </td>
               <td>
                <a href="{{URL::route('licennses.edit', array('id'=>$li->id))}}">Edit</a>
                 <input class="form-control" type="Button" name="cancelps" value="Cancel" style="max-width: 20%; margin-left: auto;">
               <input class="form-control" type="submit" name="saveps" value="Save" style="max-width: 20%; margin-left: auto;">
               </td>
           </tr>
        </tbody>
      </table>
      
      
    </div>
            
           
       

		
		
<!------------------------footer------------------------------>
    <footer id="footer" class="top-space">
    <div class="footer2 " style="margin-top:7%; " > 
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
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>--> 
	<!--<script src="assets/js/google-map.js"></script>-->
	

</body>
</html>