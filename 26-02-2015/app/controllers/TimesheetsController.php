<?php

class TimesheetsController extends \BaseController {

	/**
	 * Display a listing of timesheets
	 *
	 * @return Response
	 */
	public function index()
	{
		$timesheets = Timesheet::all();
         $tasks = Task::all();
		return View::make('timesheets.index', compact('timesheets','tasks'));
	}

	/**
	 * Show the form for creating a new timesheet
	 *
	 * @return Response
	 */
	public function create()
	{

		 $tasks = Task::all();
		return View::make('timesheets.create',compact('timesheets','tasks'));
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

		$timesheet = new timesheet();


		// $timesheet->task = Input::get('task');

  //        $timesheet->save();
        
        $timesheet->time_spent = input::get('time_spent');

        $timesheet->save();

        // $timesheet->date = input::get('date');

        // $timesheet->save();
        $timesheet->description = input::get('description');

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
		$timesheet = Timesheet::find($id);

		return View::make('timesheets.edit', compact('timesheet'));
	}

	/**
	 * Update the specified timesheet in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$timesheet = Timesheet::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Timesheet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}


          $timesheet->task = input::get('task');
          $timesheet->update();

          $timesheet->time_spent =input::get('time_spent');
           $timesheet->update();

          $timesheet->time_spent = input::get('date');
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

}
