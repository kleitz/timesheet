@extends('licennses.layouts.main')

@section('content')


<div class="container" style="text-decoration-color: black; position: relative; height:450px; width:100%; margin-top: 5%; margin-left: 10%;">

	 
			<!-- Article main content -->
                         <table class="table" style="max-width: 80%;  border-width: 4px; border-color: darkgrey;border-style: inset;"> 
        
        
                             <tr class="table-bordered">
                                       
        <th style="color:white; background-color:black; border-color:black;">Organization</th>
        <th style="color:white; background-color:black; border-color:black;">Users</th>
        <th style="color:white; background-color:black; border-color:black;">On trial / License Holder</th>
        <th style="color:white; background-color:black; border-color:black;">Package</th>
        <th style="color:white; background-color:black; border-color:black;">Days Left</th>
        
    </tr>
@foreach($organizations as $hi)  
    <tr class="table-bordered">
         <td>{{$hi->org_name}}</td>
        
<td>{{$hi->user_name }}</td>

        <td>{{$hi->on_trial }}</td>
        


       
       
        
        
    </tr>
    @endforeach
            </table>
				
			<!-- /Sidebar -->

		</div>
		@stop