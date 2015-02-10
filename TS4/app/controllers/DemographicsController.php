<?php

class DemographicsController extends \BaseController {

	/**
	 * Display a listing of demographics
	 *
	 * @return Response
	 */
	public function index()
	{
		$demographics = Demographic::all();

		return View::make('demographics.index')->with('demographics',$demographics);
	}

	/**
	 * Show the form for creating a new demographic
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('demographics.create');
	}

	/**
	 * Store a newly created demographic in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	

		$rules = array('fName' => array('required', 'min:3' , 'max:49'),
						'lName' => array('required', 'min:3' , 'max:49'),
						'city' => array('required', 'min:5' , 'max:49'),
						'country' => array('required', 'min:5' , 'max:49'),
						'phone' => array('required', 'unique:demographics', 'min:5' , 'max:49'),
						'answer' => array('required', 'min:5' , 'max:49'),
						'email' => array('required', 'unique:demographics', 'email' , 'min:5' , 'max:49'),
						'password' => array('required' , 'min:5' , 'max:16'),
						'repass' => array('required' , 'same:password' , 'min:5' , 'max:16')
					  );





		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		else{
				$firstName = Input::get('fName');
				$lastName = Input::get('lName');
				$city = Input::get('city');
				$country = Input::get('country');
				$phone = Input::get('phone');
				$answer = Input::get('answer');
				$email = Input::get('email');
				$password = Input::get('password');
				$repass = Input::get('repass');

	
				$list = new Demographic();
				
				$list->fName = $firstName;
				$list->lName = $lastName;
				$list->city = $city;
				$list->country = $country;
				$list->phone = $phone;
				$list->answer = $answer;
				$list->email= $email;
				$list->password = Hash::make($password);
				$list->repass = Hash::make($repass);
				
				$list->save();



				$email = Input::get('email');
				$userName = Input::get('fName');
				$password = Input::get('password');

				//Activation Code goes from Here
				$code = str_random(60);

				$user = User::create(array(
					'email' => $email,
					'userName' => $userName,
					'password' => Hash::make($password),    

					//		ERROR	--------HASH CLASS NOT FOUND------BUT Hash CLASS IS FOUND----------------------
					
					'code' => $code,
					'active' => 0
 				));




				if($user){

					//Sending Email Module Starts Here------------------

					Mail::send('emails.auth.activate' , array('link' => URL::route('account-activate' , $code) , 'userName' => $userName) , function($message) use ($user){

							$message ->to($user -> email , $user -> userName) -> subject('Activate Your Account');

					});


					//Sending Email module Ends Here--------------------------

					return Redirect::route('newHierarchy')->with('global' , 'Your Have Been Sent An email To Activate Your Account!');
				}

			}

		//Demographic::create($data);

		//return Redirect::route('demographics.index');
//>>>>>>>>>>>>>>>>>>>>> ABOVE GIVEN IS IMPORTANT IT IS VALIDATOR >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>





		// $firstName = Input::get('fName');
		// $lastName = Input::get('lName');
		// $city = Input::get('city');
		// $country = Input::get('country');
		// $phone = Input::get('phone');
		// $answer = Input::get('answer');
		// $email = Input::get('email');
		// $password = Input::get('password');
		// $repass = Input::get('repass');





		
		// $list = new Demographic();
		
		// $list->fName = $firstName;
		// $list->lName = $lastName;
		// $list->city = $city;
		// $list->country = $country;
		// $list->phone = $phone;
		// $list->answer = $answer;
		// $list->email= $email;
		// $list->password = $password;
		// $list->repass = $repass;
		
		// $list->save();

		// //return "Al Hamd U Lillah Saving First Record Dynamically";
		// // return $list;
		// return Redirect::route('demographics.index');
		
		


	}


	public function getActivate($code){

			$user = User::where('code' , '=' , $code) -> where('active' , '=' , 0) -> update(array('active' => 1, 'code' => '' ));

			// if($user->count()){

			// 	$user = $user->first();

			// 	$user ->active = 1;
			// 	$user ->code ='';


			// 	if($user->save()){

			// 		return Redirect::route('account-status')
			// 						->with('global' , 'Activated! Now You can Sign-In');
			// 	}

			// }

			return Redirect::route('account-status')
									->with('global' , 'Activated! Now You can Sign-In');

	}




	





	/**
	 * Display the specified demographic.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$list = Demographic::findOrFail($id);
		return View::make('users.productOwner.productOwner_licHoldList')->withList($list);
	}

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
