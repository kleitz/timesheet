<?php

class TsManagementsController extends \BaseController {

	/**
	 * Display a listing of tsmanagements
	 *
	 * @return Response
	 */
	public function index()
	{
		$tsmanagements = Tsmanagement::all();

		return View::make('TsManagements.index', compact('tsmanagements'));
	}

	/**
	 * Show the form for creating a new tsmanagement
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('TsManagements.create');
	}

	/**
	 * Store a newly created tsmanagement in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Tsmanagement::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$Tsmanagement= new Tsmanagement();

		$Tsmanagement->submition_date = input::get('submition_date');
$Tsmanagement->save();
		
		$Tsmanagement->review_deadline = input::get('review_deadline');
$Tsmanagement-> save();

		$Tsmanagement->created_by = input::get('created_by');
$Tsmanagement-> save();

		return Redirect::route('TsManagements.index');
	}

	/**
	 * Display the specified tsmanagement.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tsmanagement = Tsmanagement::findOrFail($id);

		return View::make('TsManagements.show', compact('tsmanagement'));
	}

	/**
	 * Show the form for editing the specified tsmanagement.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tsmanagement = Tsmanagement::find($id);

		return View::make('TsManagements.edit', compact('tsmanagement'));
	}

	/**
	 * Update the specified tsmanagement in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tsmanagement = Tsmanagement::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tsmanagement::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tsmanagement->update($data);

		return Redirect::route('TsManagements.index');
	}

	/**
	 * Remove the specified tsmanagement from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tsmanagement::destroy($id);

		return Redirect::route('tsmanagements.index');
	}

}
