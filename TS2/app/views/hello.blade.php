<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport"    content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
  
  <title>Sign up - Timesheet</title>

  <link rel="shortcut icon" href="assets\images\sci_fi_saturn_clock_logo.jpg">
  
  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

{{--                 -------------Commenting in laravel--------------             --}}
  {{HTML::style('https://maxcdn.bootstrap.com/bootstrap/3.3.1/css/bootstrap.min.css');}}
  {{HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');}}
  {{HTML::style('https://maxcdn.bootstrap.com/bootstrap/3.3.1/css/bootstrap.min.css');}}
  {{HTML::style('assets\images\sci_fi_saturn_clock_logo.jpg');}}
  <!-- Custom styles for our template -->
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
  <link rel="stylesheet" href="assets/css/main.css">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
   <script>
        function validateForm() {
           
            var x = document.forms["Form"]["password"].value;
            var y = document.forms["Form"]["repass"].value;
            
            
              if ( x != y) {
                alert("Password didnot matched please reenter");
                return false;
            }
        }
    </script>
</head>

<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="index.html"><img src="assets\images\sci_fi_saturn_clock.jpg" alt=""></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="sidebar-left.html">Left Sidebar</a></li>
              <li><a href="sidebar-right.html">Right Sidebar</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
          <li class="active"><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div> 
  <!-- /.navbar -->

  <header id="head" class="secondary"></header>

  <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li class="active">Registration</li>
    </ol>

    <div class="row">
      
      <!-- Article main content -->
      <article class="col-xs-12 maincontent">
        <header class="page-header">
          <h1 class="page-title">Registration</h1>
        </header>
        
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <h3 class="thin text-center">Register a new account</h3>
              <p class="text-center text-muted">If you are a new user, you can Register by writing your credentials below. </br>If you are have registered before you can access your account after </br><a href="signin.html">Login</a></p>
              <hr>

              {{Form::open (array('route'=>'demographics.store'))}}
                <div class="top-margin">
                  <label>First Name<span class="text-danger">*</span></label>
                  <input name="fName" type="text" class="form-control" required>
                </div>
                
                <div class="top-margin">
                  <label>Last Name<span class="text-danger">*</span></label>
                  <input name="lName" type="text" class="form-control" required>
                </div>
                
                                <div class="top-margin">
                  <label>City</label>
                  <input name="city" type="text" class="form-control" required>
                </div>
                
                <div class="top-margin">
                  <label>Country</label>
                  <input name="country" type="text" class="form-control" required>
                </div>
                
                <div class="top-margin">
                  <label>Phone No.<span class="text-danger">*</span></label>
                  <input name="phone" type="number" class="form-control" required>
                </div>
                
                <div class="top-margin">
                                                                    <label> Secret Question:&nbsp;&nbsp;&nbsp;&nbsp; What Is Your Mother's Birthplace?<span class="text-danger">*</span></label>
                                                                    <input name="answer" type="text" class="form-control" required>
                </div>
                
                
                <div class="top-margin">
                  <label>Email Address <span class="text-danger">*</span></label>
                  <input name="email" type="email" class="form-control" required>
                </div>
                
                <div class="row top-margin">
                  <div class="col-sm-6">
                    <label>Password <span class="text-danger">*</span></label>
                    <input name="password" type="password" class="form-control" required>
                  </div>
                  <div class="col-sm-6">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                    <input name="repass" type="password" class="form-control" required>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-lg-8">
                    <label class="checkbox">
                      <input type="checkbox" required> 
                      I've read the <a href="page_terms.html">Terms and Conditions</a>
                    </label>                        
                  </div>
                  <div class="col-lg-4 text-right">
                    <button class="btn btn-action" type="submit">Register</button>
                  </div>
                </div>
              {{Form::close()}}
            </div>
          </div>

        </div>
        
      </article>
      <!-- /Article -->

    </div>
  </div>  <!-- /container -->
  

  <footer id="footer" class="top-space">

    <div class="footer1">
      <div class="container">
        <div class="row">
          
          <div class="col-md-3 widget">
            <h3 class="widget-title">Contact</h3>
            <div class="widget-body">
              <p>+234 23 9873237<br>
                <a href="mailto:#">hypernova1990@gmail.com</a><br>
                <br>
                54-Lawrence Road, Lahore, Pakistan.
              </p>  
            </div>
          </div>

          <div class="col-md-3 widget">
            <h3 class="widget-title">Follow me</h3>
            <div class="widget-body">
              <p class="follow-me-icons clearfix">
                <a href=""><i class="fa fa-twitter fa-2"></i></a>
                <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                <a href=""><i class="fa fa-github fa-2"></i></a>
                <a href=""><i class="fa fa-facebook fa-2"></i></a>
              </p>  
            </div>
          </div>

          <div class="col-md-6 widget">
<!--            <h3 class="widget-title">Text widget</h3>
            <div class="widget-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
              <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
            </div>-->
          </div>

        </div> <!-- /row of widgets -->
      </div>
    </div>

    <div class="footer2">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 widget">
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

          <div class="col-md-6 widget">
            <div class="widget-body">
              <p class="text-right">
                Copyright &copy; 2014, UniSYS Tech. Designed by <a href="http://gettemplate.com/" rel="designer">UniSYS Tech.</a>  
              </p>
            </div>
          </div>

        </div> <!-- /row of widgets -->
      </div>
    </div>
  </footer> 
    




  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/headroom.min.js"></script>
  <script src="assets/js/jQuery.headroom.min.js"></script>
  <script src="assets/js/template.js"></script>
</body>
</html>