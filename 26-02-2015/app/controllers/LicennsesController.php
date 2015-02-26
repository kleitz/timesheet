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
		$rules = array('notify_before' => array('required|integer|between:1,1000'),
						'license_period' => array('required|integer|between:1,10'),
						'trial_period' => array('required|integer|between:1,10'),
						
					  );




		$validator = Validator::make($data = Input::all(), Licennse::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$licennse = new Licennse();

		$licennse->notify_before = Input::get('notify_before');
		$licennse->save();

		$licennse->license_period = Input::get('license_period');
		$licennse->save();

		$licennse->trial_period = Input::get('trial_period');
		$licennse->save();
        
       

        
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


		$validator = Validator::make($data = Input::all(), licennse::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}


		

		$licennse->license_period = Input::get('license_period');
		$licennse->update();

		$licennse->trial_period = Input::get('trial_period');
		$licennse->update();

		$licennse->notify_before = Input::get('notify_before');
		$licennse->update();

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
