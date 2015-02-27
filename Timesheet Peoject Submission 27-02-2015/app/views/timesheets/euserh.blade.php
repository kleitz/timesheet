@extends('layouts.super_user')


@section('navbar')
	
	<li><a class="btn" href="{{URL::route('account-sign-out')}}">SIGN OUT</a></li>

@stop


@section('content')

	<!-- Fixed navbar -->
	
	<!-- /.navbar -->

	


<a href="{{ URL::route('timesheetsView');}}" class="btn btn-action btn-sm"style="margin-left: 20%;margin-top: 10%;max-width: 20%"><h3>Fill Timesheet </h3></a></div1> 

<a href="{{ URL::route('timesheets.index');}}" class="btn btn-primary btn-sm"style="margin-left: 15%;margin-top: 10%;max-width: 20%"><h3>Dash Board</h3></a></div1> 

{{link_to_route('')}}


 @stop 
