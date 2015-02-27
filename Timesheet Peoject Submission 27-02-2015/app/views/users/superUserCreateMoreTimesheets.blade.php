@extends('layouts.super_user')



@section('navbar')

	<li><a href="{{URL::route('superUserHome')}}">Manage Employees</a></li>
	<li class='active'><a href="{{URL::route('manageTimesheets')}}">Manage Timesheet</a></li><li><a href="{{URL::route('pendingTimesheet')}}">Pending Timesheet</a></li>
    <li><a href="#">View Reports</a></li>
	<li><a class="btn" href="{{URL::route('account-sign-out')}}">SIGN OUT</a></li>

@stop

@if(Auth::check())
@section('content')

@else

@endif




<div class="container">

		<h4 style="margin-left:80%; color:black;">Hello {{Auth::user()->user_name}}!</h4>
    <ol class="breadcrumb" style="margin-top:-1%;">
			<li><a href="{{URL::route('superUserHome')}}">Super-User Home</a></li>
                        <li>Manage Timesheets</li>
								
		</ol>

		<div class="row">


<article class="col-xs-12 maincontent">
				
					<h2 class="text-muted" style="color:black;">Manage Timesheets</h2>
				
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="text-center text-muted" style="color:black;">Add Tasks</h3>
              <h3 class="text-center text-muted" style="color:black;">{{-- $task->id --}}</h3>
		<hr>
  {{link_to_route('tasks.edit' , 'Issue Timesheet' , [] ,['class'=>'btn btn-danger btn-xs' , 'style'=>'width:100%; background-color:#F70; color:black;'] )}}</br><hr>
           {{--Form::open(array('route' => array('editMore', $user->id)))--}}
           {{Form::open (array('route'=>'editMore' , 'method'=>'GET'))}}
                <Input type="text" class='form-control' style="margin-bottom:3%" placeholder='Please Add Tasks' name='task'>
                {{-- link_to_route('tasks.edit', 'Save Task', [$timesheet->id], ['class="btn btn-action"'])--}}
                {{-- link_to_route('editMore', 'Save Task', ['class="btn btn-action"'])--}}
                <button class="btn btn-action btn-xs" type="submit">Add Task To Timesheet</button>
           {{Form::close()}}   

</br>
      <table class="table">
            @foreach($task as $task)
              
              <tr>
                <td style = "background-color:white; border-color:#bbb; width:50%;" >
                  <h4>
                    {{$task->task_name }}
                  </h4>
                </td>
                
                <td style = "background-color:white; border-color:#bbb; width:50%;">
                  <h6>
                    {{ Form::model($task, ['route' => ['tasks.destroy' , $task->id] , 'method'=>'delete' ] ) }}
                          {{Form::button('Delete Task' , ['type'=>'submit' , 'class'=>'btn btn-action btn-xs' ])}}
                    {{Form::close()}}
                  </h6>
                </td>

              </tr>
            
            @endforeach
      </table>

		</div>
	</div>
</div>
				</div>
				
			</article>
</div>	<!-- /container -->


@stop