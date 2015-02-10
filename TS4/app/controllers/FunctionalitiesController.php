<?php

class FunctionalitiesController extends \BaseController {

	/**
	 * Display a listing of demographics
	 *
	 * @return Response
	 */
	public function index()
	{
		$functionalities = Functionality::all();

		return View::make('functionalities.index')->with('functionalities',$functionalities);
	}

	/**
	 * Show the form for creating a new demographic
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('users.create');
	}

	/**
	 * Store a newly created demographic in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	

		// $rules = array('hierarchyLevels' => array('required','max:1', binary),
		// 				  );





		// $validator = Validator::make(Input::all(), $rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// else{
		// 		$email = Input::get('email');
		// 		$userName = Input::get('fName');
		// 		$password = Input::get('password');

		// 		//Activation Code goes from Here
		// 		$code = str_random(60);

		// 		$create = User::create(array(
		// 			'email' => $email,
		// 			'userName' => $userName,
		// 			'password' => $password,    

		// 			//		ERROR	--------HASH CLASS NOT FOUND----------------------------
					
		// 			'code' => $code,
		// 			'active' => 0
 	// 			));

		// 		if($user){
		// 			//Sending Email Module Here

		// 			return Redirect::route('reg_success')->with('global' , 'Your Account Has Been Created!');
		// 		}

		// 	}

		// //Demographic::create($data);

		// //return Redirect::route('demographics.index');
//>>>>>>>>>>>>>>>>>>>>> ABOVE GIVEN IS IMPORTANT IT IS VALIDATOR >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>





		$define_Hierar = Input::get('def_hierar');
		$manage_emplo = Input::get('manage_emplo');
		$manage_timesh = Input::get('manage_timesh');
		$create_timesh = Input::get('create_timesh');
		$appr_timesh = Input::get('appr_timesh');
		$check_rep = Input::get('check_rep');




		
		$list = new Functionality();
		
		$list->defHierar = $define_Hierar;
		$list->manage = $manage_emplo;
		$list->manageTimesh = $manage_timesh;
		$list->createTimesh = $create_timesh;
		$list->apprTimesh = $appr_timesh;
		$list->checkRep = $check_rep;
		

		$list->save();

		//return "Al Hamd U Lillah Saving First Record Dynamically";
		// return $list;
		return Redirect::route('newHierarchy');
		
		


	}

	/**
	 * Display the specified demographic.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show($id)
	// {
	// 	return View::make('newHierarchy');

	// 	// $list = Demographic::findOrFail($id);
	// 	// return View::make('users.productOwner.productOwner_licHoldList')->withList($list);
	// }

	/**
	 * Show the form for editing the specified demographic.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$demographic = Demographic::find($id);

		return View::make('demographics.edit', compact('demographic'));
	}

	/**
	 * Update the specified demographic in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$demographic = Demographic::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Demographic::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$demographic->update($data);

		return Redirect::route('demographics.index');
	}

	/**
	 * Remove the specified demographic from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Demographic::destroy($id);

		return Redirect::route('demographics.index');
	}

}
