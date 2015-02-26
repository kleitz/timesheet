@extends('timesheets.layouts.main')

<script language="JavaScript">
function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
}
</script>


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


<!--<img src="assets/images/image4.png"  height="450" width="1400" alt="1image" style='opacity: 0.5;position: fixed; '/>-->


   
   
   {{ Form::open(array('action' => 'timesheets.store',  'id' => 'tsheet')) }}   
      <!-- Article main content -->
            
      @include('timesheets.mon')           
      <!-- /Article -->
      
      <!-- Sidebar -->
      

        
      <!-- /Sidebar -->

    

 {{ Form::close() }}
    
     

@stop