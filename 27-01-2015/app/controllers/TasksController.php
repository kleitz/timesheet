<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of tasks
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::all();

		return View::make('users.superUserManageTimesheets', compact('tasks'));
	}

	/**
	 * Show the form for creating a new task
	 *
	 * @return Response
	 */
	public function create()
	{ 
		$task_name = Input::get('task');
		$adder = Auth::user()->id;
		$timesheets_id = Timesheet::where('sup_id', '=' , $adder)
						->where('status' , '=' , 'inactive')->first();
		$timesheet_id = $timesheets_id->id;
		$user_id = $timesheets_id->user_id;
		
		$date = Timesheet::where('sup_id', '=' , $adder)
						->where('status' , '=' , 'inactive')->first();


		$date =	$date->date;	


		// $timesheet_id = DB::table('timesheets')->where('sup_id' , $adder)->where('status' , 'inactive')->first();
		// return $timesheet_id->id;

		$task = new Task();
		$task->timesheet_id = $timesheet_id;
		$task->user_id = $user_id;
		
		$task->date = $date;
		
		$task->task_name = $task_name;
		$task->created_by = Auth::user()->id;
		$task->status = 'new';
		$task->save();
		
		$adder = Auth::user()->id;
		$task = Task::where('created_by', '=' , $adder)->where('status' , '=' , 'new')->where('user_id' , '=' , $user_id)->get(); 
		return View::make('users.superUserCreateMoreTimesheets', compact('task'));
	} //&& where('status', '=' , 'new')->

	public function editMore()
	{   return 'Asalam o Alaikum';
		// $task_name = Input::get('task');
		// $task = new Task();
		// $task->task_name = $task_name;
		// $task->created_by = Auth::user()->id;
		// $task->status = 'new';
		// $task->save();

		return View::make('users.superUserCreateMoreTimesheets'); //, compact('timesheet')
	}
	/**
	 * Store a newly created task in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	return 'Asalam O Alaikum!';
		// $rules = array('task' => array('required', 'min:4' , 'max:49')
						
		// 			  );

		//  $validator = Validator::make($data = Input::all(), Task::$rules);

		//  if ($validator->fails())
		//  {
		//  	return Redirect::back()->withErrors($validator)->withInput();
		//  }
		//  else{
		// 		$task = Input::get('task');
		// 		$tasks = new Task();

		// 		$tasks->task_name = $task;
		// 		$tasks->save(); 	
		//  }
		
		// return Redirect::route('createTimesheet');
	}

	/**
	 * Display the specified task.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$task = Task::findOrFail($id);

		return View::make('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified task.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{ 	
		$adder = Auth::user()->id;
		$updateTasks = Task::where('created_by', '=' , $adder)->where('status' , '=' , 'new')->update(array('status' => ''));
		$adder = Auth::user()->id;
		$updateTimesheet = Timesheet::where('sup_id', '=' , $adder)->where('status' , '=' , 'inactive')->update(array('status' => 'issued'));
		return Redirect::route('manageTimesheets');
	}

	/**
	 * Update the specified task in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		    

		$id;
		$tasks = Task::findOrFail($id);
		if($tasks == ''){
					return Redirect::route('timesheets.index')->withMessage('There Are No Tasks To Be Updated');
		}
		else{
				$validator = Validator::make($data = Input::all(), Task::$rules);

				if ($validator->fails())
				{
					return Redirect::back()->withErrors($validator)->withInput();
				}

				  $time_spent = Input::get('time_spent');
		          $tasks->time_spent = $time_spent;
		          $tasks->update();

		          $description = Input::get('description');
		          $tasks->description = $description;
		          $tasks->update();
				// $timesheet->update($data);

				return Redirect::back();
		}
		
	}

	/**
	 * Remove the specified task from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	

		$id;
		$task = Task::where('id' , '=' , $id)->delete();

		$adder = Auth::user()->id;
		$task = Task::where('created_by', '=' , $adder)->where('status' , '=' , 'new')->get(); 
		return View::make('users.superUserCreateMoreTimesheets', compact('task'));
	}

}
