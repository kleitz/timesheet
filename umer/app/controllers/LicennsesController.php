<?php

class LicennsesController extends \BaseController {

	/**
	 * Display a listing of licennses
	 *
	 * @return Response
	 */
	public function index()
	{
		$licennses = Licennse::all();

		return View::make('licennses.index', compact('licennses'));
	}

	/**
	 * Show the form for creating a new licennse
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('licennses.create');
	}

	/**
	 * Store a newly created licennse in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Licennse::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$license = new Licennse();

		$license->start_date = '2015-02-07';
		$license->save();

		$license->end_date = '2015-02-07';
		$license->save();

		$license->trial_period = Input::get('trial_period');
		$license->save();

		return Redirect::route('licennses.index');
	}

	/**
	 * Display the specified licennse.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$licennse = Licennse::findOrFail($id);

		return View::make('licennses.show', compact('licennse'));
	}

	/**
	 * Show the form for editing the specified licennse.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$licennse = Licennse::find($id);

		return View::make('licennses.edit', compact('licennse'));
	}

	/**
	 * Update the specified licennse in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$licennse = Licennse::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Licennse::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$licennse->update($data);

		return Redirect::route('licennses.index');
	}

	/**
	 * Remove the specified licennse from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Licennse::destroy($id);

		return Redirect::route('licennses.index');
	}

}
