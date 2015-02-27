<?php

class FunctionalitiesController extends \BaseController {

	
	public function __construct(){

		$this->beforeFilter('csrf' , array('on' => 'post'));
	}




	/**
	 * Display a listing of Functionalitys
	 *
	 * @return Response
	 */
	public function index()
	{
		$functionalities = Functionality::all();

		return View::make('users.superUser.set_hierarchy')->with('functionalities',$functionalities);
	}

	/**
	 * Show the form for creating a new Functionality
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('Functionalities.create');
	}

	/**
	 * Store a newly created Functionality in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	

		$rules = array('def_hierar' => array('min:7' , 'max:8'),
						'manage_empl' => array('min:7' , 'max:8'),
						'manage_timesh' => array('min:7' , 'max:8'),
						'appr_timesh' => array('min:7' , 'max:8'),
						'check_rep' => array('min:7' , 'max:8')
						
					  );





      	$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

	 		else{

					$def_hierar = Input::get('def_hierar');
					$manage_empl = Input::get('manage_empl');
					$manage_timesh = Input::get('manage_timesh');
					$appr_timesh = Input::get('appr_timesh');
					$check_rep = Input::get('check_rep');

					
					$functionalities = new Functionality();
					
					$functionalities->def_hierar = $def_hierar;
					$functionalities->manage_empl = $manage_empl;
					$functionalities->manage_timesh = $manage_timesh;
					$functionalities->appr_timesh = $appr_timesh;
					$functionalities->check_rep = $check_rep;
					
					$functionalities->save();

		 	}
		 	
		 	return Redirect::route('functionalities.index');
	
	 }




	





	/**
	 * Display the specified Functionality.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$list= Functionality::findOrFail($level_id);
		
		return View::make('users.superUser.set_hierarchy')->withList($list);
	
	}

	/**
	 * Show the form for editing the specified Functionality.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Functionality = Functionality::find($id);

		return View::make('users.superUser.functionalities.edit', compact('Functionality'));
	}

	/**
	 * Update the specified Functionality in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// $Functionality = Functionality::findOrFail($id);

		// $validator = Validator::make($data = Input::all(), Functionality::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// $Functionality->update($data);

		// return Redirect::route('Functionalitys.index');
	}

	/**
	 * Remove the specified Functionality from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Functionality::destroy($id);

		// return Redirect::route('Functionalitys.index');
	}


	

	
}
