<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sign in - Timesheet</title>

	<!-- <link rel="shortcut icon" href="assets\images\sci_fi_saturn_clock_logo.jpg"> -->
	
	<!-- <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->
  {{HTML::style('assets/css/style.css');}}
  {{HTML::style('assets/css/bootstrap.min.css');}}
  {{HTML::style('https://maxcdn.bootstrap.com/bootstrap/3.3.1/css/bootstrap.min.css');}}
  {{HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');}}
  {{HTML::style('assets\images\sci_fi_saturn_clock_logo.jpg');}}
  {{HTML::script('assets/js/countries.js');}}
  {{HTML::style('assets/css/main.css');}}
  {{HTML::style('assets/css/font-awesome.min.css');}}
  {{HTML::style('assets/css/bootstrap-theme.css');}}
	<!-- Custom styles for our template -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css"> -->

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
				<a class="navbar-brand" href="index"><img src="assets\images\sci_fi_saturn_clock.jpg" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index">Home</a></li>
					<li><a href="about">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left">Left Sidebar</a></li>
							<li><a href="sidebar-right">Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="contact">Contact</a></li>
					<li class="active"><a class="btn" href="signup">SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							<p class="text-center text-muted">If you are a Registered user, you can Sign-in by using UserName and Password. </br>If you are a new user you can go to registration page to <a href="signup"><h5 align="center">Register</h5></a></p>
							<hr>
							
							<form action="{{ URL::route('account-sign-in-post') }}" method="post">
								<div class="top-margin">
									<label>Username/Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name='email' {{(Input::old('email')) ? 'value = "'.  Input::old('email')  .'"' : '' }} required>
                                    @if($errors->has('email'))
                                    	{{$errors->first('email')}}
                                    @endif
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control" name='password' required>
									@if($errors->has('password'))
                                    	{{$errors->first('password')}}
                                    @endif
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Forgot password?</a></b>
									</div>
									
									{{Form::token()}}
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" formaction="UserHome">Sign in</button>
									</div>
								
								</div>

								
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

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
<!--						<h3 class="widget-title">Text widget</h3>
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
								<a href="about">About The Product</a> |
								<a href="sidebar-right">Sidebar</a> |
								<a href="contact">Contact</a> |
								<b><a href="signup">Sign up</a></b>
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
	{{HTML::script("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js");}}
	{{HTML::script("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js");}}
	{{HTML::script("assets/js/headroom.min.js");}}
	{{HTML::script("assets/js/jQuery.headroom.min.js");}}
	{{HTML::script("assets/js/template.js");}}
</body>
</html>