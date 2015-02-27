<?php

class TimesheetsController extends \BaseController {

	/**
	 * Display a listing of timesheets
	 *
	 * @return Response
	 */
	public function index()
	{

		$user_id = Auth::user()->id;
		$timesheets = Timesheet::where('user_id' , '=' , $user_id)->where('status' , '=' , 'issued')->paginate(4);
		return View::make('timesheets.index', compact('timesheets'));
	}

	/**
	 * Show the form for creating a new timesheet
	 *
	 * @return Response
	 */
	public function create()
	{
		$timesheet = new Timesheet();
		// $timesheet->user_id = $id;
		$timesheet->sup_id = Auth::user()->id;
		$timesheet->status = 'inactive';
		$timesheet->save();
		return View::make('users.superUserCreateTimesheet'); //, compact('timesheet')
	}



	/**
	 * Store a newly created timesheet in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Timesheet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$timesheet = new Task();


		$timesheet->task = Input::get('task');
		$timesheet->save();
        
        $timesheet->time_spent = Input::get('time_spent');
		$timesheet->save();

        $timesheet->description = Input::get('description');
		$timesheet->save();
		
		return Redirect::route('timesheets.index');
	}

	/**
	 * Display the specified timesheet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$timesheet = Timesheet::findOrFail($id);

		return View::make('timesheets.show', compact('timesheet'));
	}

	/**
	 * Show the form for editing the specified timesheet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{   
		$id;
		$date = Input::get('date');

		$timesheet = new Timesheet();
		$timesheet->user_id = $id;
		$timesheet->sup_id = Auth::user()->id;
		$timesheet->date = $date;
		$timesheet->status = 'inactive';
		$timesheet->save();
		

		$timesheet = new Timesheet();
		$timesheet->date = $date;
		return View::make('users.superUserCreateTimesheet' ,compact('timesheet'));
		
	}

	/**
	 * Update the specified timesheet in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	$id;
		$timesheet = Timesheet::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Timesheet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}


          $timesheet->time_spent =input::get('time_spent');
          $timesheet->update();

          $timesheet->description = input::get('description');
          $timesheet->update();
		// $timesheet->update($data);

		return Redirect::route('timesheets.index');
	}

	/**
	 * Remove the specified timesheet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Timesheet::destroy($id);

		return Redirect::route('timesheets.index');
	}



	
	public function issuedTimesheet(){

		$user_id = Auth::user()->id;
		$timesheets = Timesheet::where('user_id' , '=' , $user_id)->where('status' , '=' , 'issued')->paginate(4);
		return View::make('timesheets.index', compact('timesheets'));

	}

	public function fillTimesheet($id){
		$id;
		$user_id = Auth::user()->id;
		$tasks = Task::where('user_id' , '=' , $user_id)->where('status', '=', '')->where('timesheet_id', '=', $id)->get();
		return View::make('tasks.fillTimesheet', compact('tasks'));
		return $tasks;
	}

	public function pendingTimesheet(){

		$user_id = Auth::user()->id;
		$users = User::where('created_by' , '=' , $user_id)->where('active' , '=' , 'active')->get();
		return View::make('timesheets.pendingTimesheets', compact('users'));
	}



	public function reviewTimesheet($id){
		$id;
		$user_id = Auth::user()->id;
		$timesheets = Timesheet::where('sup_id' , '=' , $user_id)->where('user_id' , '=' , $id)->where('status', '=', 'pending')->get();
		return View::make('tasks.reviewTimesheet', compact('timesheets'));
		
	}


	public function submitTimesheet($id){
		$id;
		$updateTimesheet = Timesheet::where('id', '=' , $id)->where('status' , '=' , 'issued')->update(array('status' => 'pending'));
		return Redirect::route('timesheets.index');

	}



	public function pendingTimesheets(){

		return View::make('users.pendingTimesheets');
	}


	public function viewTimesheetBeforeAcceptance($id){
		
		$adder = Auth::user()->id;
		$tasks = Task::where('status' , '=' , '')->where('timesheet_id' , '=' , $id)->get(); 
		return View::make('timesheets.viewTimesheetBeforeAcceptance', compact('tasks'));

		return View::make('timesheets.viewTimesheetBeforeAcceptance' , compact('')) ;
	}


	public function acceptTimesheet($id){
		
		$adder = Auth::user()->id;
		$timesheet = Timesheet::where('id' , '=' , $id)->where('status' , '=' , 'pending')->update(array('status' => 'accepted' ));
		return Redirect::back();

	}

	public function rejectTimesheet($id){
		
		$adder = Auth::user()->id;
		$timesheet = Timesheet::where('id' , '=' , $id)->where('status' , '=' , 'pending')->update(array('status' => 'rejected' ));
		return Redirect::back();

	}

}
