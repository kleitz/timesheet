@extends('timesheets.layouts.main')

@section('content')



<!--<img src="assets/images/image4.png"  height="450" width="1400" alt="1image" style='opacity: 0.5;position: fixed; '/>-->
{{ Form::model($timesheet, ['route' => ['timesheets.update', $timesheet->id], 'method' => 'put' , 'id' => 'pform'])}}

@include('timesheets.mon')

      <!-- Article main content -->
                       
      <!-- /Article -->
      
      <!-- Sidebar -->
      

        
      <!-- /Sidebar -->

    
      {{ Form::close() }}
     


@stop