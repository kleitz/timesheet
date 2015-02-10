<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Timesheet - Your Online Task & Time Keeper</title>
<!---------------------------------Links for the pricing container-------------------------------------------> 
        
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/MynewJS.js" type="text/javascript"></script>
        <link href="css/myStyles.css" rel="stylesheet" type="text/css"/>
<!----------------------------------------Links for the pricing container ends here----------------------------------------> 
        
        <link rel="shortcut icon" href="assets\images\sci_fi_saturn_clock_logo.jpg">
        
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
    {{HTML::style('assets/css/bootstrap-theme.css');}}
    {{HTML::style('assets/css/main.css');}}
    {{HTML::style('assets/css/bootstrap.min.css');}}
    {{HTML::style('assets/css/font-awesome.min.css');}}
    {{HTML::script('js/main.js');}}


    <script src="js/main.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
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
					<li class="active"><a href="#">Home</a></li>
					<li><a href="about">About The Product</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left">Left Sidebar</a></li>
							<li class="active"><a href="sidebar-right">Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="contact">Contact</a></li>
					<li><a class="btn" href="{{URL::route('home')}}">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">AWESOME & CUSTOMIZABLE APPLICATION</h1>
                <p class="tagline"></p>
				<p class="tagline">Now Available at</p>
				<p><a class="btn btn-default btn-lg" role="button">Google Play</a> <a class="btn btn-action btn-lg" role="button">App Store</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin" style="color:black; text-shadow:100%; ">Synchronize the activities of Employees</h2>
		<p class="text-muted">
			Handle your Projects and Worksheets of Employees<br> 
			
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Reasons to use Timesheet</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Customizable</h4></div>
					<div class="h-body text-center">
						<p>Domain Independent application which can construct Organization of any type</br> and any level. It is also a Generic Application with distributable functionalities. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Efficient</h4></div>
					<div class="h-body text-center">
						<p>The application that is available 24/7. </br>It generates the reports within moments and displays, which are difficult to developed even in days. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Synchronized</h4></div>
					<div class="h-body text-center">
						<p>Application that show the most updated data related to tasks and timings of the</br> Employees, to the Employer.</br> Every person that is allowed to see the specific data, can see it.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Developer's support</h4></div>
					<div class="h-body text-center">
						<p> The on-line help & services are available for maintenance of the system.</br> Updates are provided with the addition of new features.</p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

<!-------------------------------Pricing related container starts here------------------------------>
    
<!-- <div id="container">
    
    <div class="whole">
            
            <div class="type">
                    <p>Simple</p>
            </div>
            
            <div class="plan">

                    <div class="header">
                            <span>Rs.</span>0<sup>K</sup>
                            <p class="month">For 30 Days</p>
                    </div>
                    
                    <div class="content">
                            <ul>
                                    <li>15 Email Accounts</li>
                                    <li>100GB Space</li>
                                    <li>1 Domain Name</li>
                                    <li>500GB Bandwidth</li>
                            </ul>

                    </div>

                    <div class="price">
                            <a href="signup" class="bottom"><p class="cart">Subscribe</p></a>
                    </div>
            </div>
    </div>

<div class="whole">
		<div class="type standard">
		<p>Standard</p>
		</div>
	<div class="plan">

		<div class="header">
			<span>Rs.</span>49<sup>K</sup>
			<p class="month">per month</p>
		</div>
		<div class="content">
			<ul>
				<li>15 Email Accounts</li>
				<li>100GB Space</li>
				<li>1 Domain Name</li>
				<li>500GB Bandwidth</li>
			</ul>
		</div>
		<div class="price">
			<a href="signup" class="bottom"><p class="cart">Subscribe</p></a>
		</div>
	</div>
</div>

	<div class="whole">
		<div class="type ultimate">
		<p>Ultimate</p>
		</div>
	<div class="plan">

		<div class="header">
			<span>Rs.</span>79<sup>K</sup>
			<p class="month">per month</p>
		</div>
		<div class="content">
			<ul>
				<li>15 Email Accounts</li>
				<li>100GB Space</li>
				<li>1 Domain Name</li>
				<li>500GB Bandwidth</li>
			</ul>
		</div>
		<div class="price">
                    <a href="signup" class="bottom"><p class="cart">Subscribe</p></a>
		</div>
	</div>
</div>
</div> -->

<!--**************************************Pricing related container ends here*******************************************-->           
            
            
            
<!--		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Which code editor would you recommend?</h3>
				<p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
			</div>
			<div class="col-sm-6">
				<h3>Nice header. Where do I find more images like that one?</h3>
				<p>
					Well, there are thousands of stock art galleries, but personally, 
					I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a> 
					and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
			</div>
		</div>  /row 

		<div class="row">
			<div class="col-sm-6">
				<h3>Can I use it to build a site for my client?</h3>
				<p>
					Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>, 
					which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work. 
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Can you customize this template for me?</h3>
				<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
			</div>
		</div>  /row -->

		<div class="jumbotron top-space">
<!--			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>-->
     		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


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
								54-Lawrence Road, Lahore 54000, Punjab, Pakistan.
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow Us</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>