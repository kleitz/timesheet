<?php

class DegreesController extends \BaseController {

	/**
	 * Display a listing of degrees
	 *
	 * @return Response
	 */
	public function index()
	{
		$degrees = Degree::all();

		return View::make('degrees.index', compact('degrees'));
	}

	/**
	 * Show the form for creating a new degree
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('degrees.create');
	}

	/**
	 * Store a newly created degree in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Degree::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Degree::create($data);

		return Redirect::route('degrees.index');
	}

	/**
	 * Display the specified degree.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$degree = Degree::findOrFail($id);

		return View::make('degrees.show', compact('degree'));
	}

	/**
	 * Show the form for editing the specified degree.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$degree = Degree::find($id);

		return View::make('degrees.edit', compact('degree'));
	}

	/**
	 * Update the specified degree in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$degree = Degree::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Degree::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$degree->update($data);

		return Redirect::route('degrees.index');
	}

	/**
	 * Remove the specified degree from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Degree::destroy($id);

		return Redirect::route('degrees.index');
	}



	

}
