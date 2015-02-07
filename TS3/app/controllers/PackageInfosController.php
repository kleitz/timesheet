<?php

class PackageInfosController extends \BaseController {

	/**
	 * Display a listing of packageinfos
	 *
	 * @return Response
	 */
	public function index()
	{
		$packageinfos = Packageinfo::all();

		return View::make('packageinfos.index', compact('packageinfos'));
	}

	/**
	 * Show the form for creating a new packageinfo
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('packageinfos.create');
	}

	/**
	 * Store a newly created packageinfo in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Packageinfo::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Packageinfo::create($data);

		return Redirect::route('packageinfos.index');
	}

	/**
	 * Display the specified packageinfo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$packageinfo = Packageinfo::findOrFail($id);

		return View::make('packageinfos.show', compact('packageinfo'));
	}

	/**
	 * Show the form for editing the specified packageinfo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$packageinfo = Packageinfo::find($id);

		return View::make('packageinfos.edit', compact('packageinfo'));
	}

	/**
	 * Update the specified packageinfo in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$packageinfo = Packageinfo::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Packageinfo::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$packageinfo->update($data);

		return Redirect::route('packageinfos.index');
	}

	/**
	 * Remove the specified packageinfo from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Packageinfo::destroy($id);

		return Redirect::route('packageinfos.index');
	}

}
