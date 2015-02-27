<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{	$adder = Auth::user()->id;
		$users = User::where('created_by', '=' , $adder)->get();

		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
						'employee_name' => array('required', 'min:3' , 'max:49'),
						'designation' => array('min:3' , 'max:49'),
						'skills' => array('min:2' , 'max:49'),
						'address' => array('min:9' , 'max:49'),
						'email' => array('required', 'unique:users', 'email' , 'min:5' , 'max:49'),
						'password' => array('required' , 'min:5' , 'max:16'),
						'role' => array('required' , 'min:10' , 'max:11')
						
					  );


		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else{	$employee_name = Input::get('employee_name');
				$designation = Input::get('designation');
				$skills = Input::get('skills');
				$address = Input::get('address');
				$email = Input::get('email');
				$password = Input::get('password');
				$role = Input::get('role');


				$user = new User();
				$user->user_name= $employee_name;
				$user->email= $email;
				$user->role = $role;
				$user->designation = $designation;
				$user->address = $address;
				$user->skills = $skills;
				$user->password = Hash::make(Input::get('password'));
				$user->created_by = Auth::user()->id;
				$user->active = 'active';
				$user->save();
		}


		return Redirect::route('users.index');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$user = User::findOrFail($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
						'user_name' => array('required', 'min:3' , 'max:49'),
						'designation' => array('min:3' , 'max:49'),
						'skills' => array('min:2' , 'max:49'),
						'address' => array('min:9' , 'max:49'),
						'email' => array('required', 'min:5' , 'max:49'),
						'password' => array('required' , 'min:5' , 'max:16'),
						'role' => array('required' , 'min:10' , 'max:11')

					  );


		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::route('users.edit' , $id)->withErrors($validator)->withInput();
		}
		else{	
				$user_name = Input::get('user_name');
				$email = Input::get('email');
				$designation = Input::get('designation');
				$skills = Input::get('skills');
				$address = Input::get('address');
				$role = Input::get('role');
				$password = Input::get('password');
				$active = Input::get('active');


				$user = User::findOrFail($id);
				$user->user_name= $user_name;
				$user->email= $email;
				$user->designation = $designation;
				$user->address = $address;
				$user->skills = $skills;
				$user->role = $role;
				$user->password = Hash::make(Input::get('password'));
				$user->created_by = Auth::user()->id;
				$user->active = $active;
				$user->update();
		}


		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}


	public function postSignIn(){

		$validator = Validator::make($data = Input::all(), array(
			'email' => 'required|email', 'password' => 'required' ));

		if ($validator->fails())
		{
			
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$email = $data['email'];
		$password =  $data['password'];
		
		
		if (Auth::attempt(array('email' => $email, 'password' => $password, 'active' => 'active' , 'role' => 'superUser')))
		{
    		return Redirect::route('superUserHome');
    		// The user is active, not suspended, and exists.
		} 

		elseif(Auth::attempt(array('email' => $email, 'password' => $password, 'active' => 'active' , 'role' => 'supervisor')))
		{
			return Redirect::route('supervisorHome');	
		}
			
		elseif(Auth::attempt(array('email' => $email, 'password' => $password, 'active' => 'active' , 'role' => 'subordinate')))
		{
			return Redirect::back()->withMessage('You are Subordinate!');	
		}

		return Redirect::back()->withMessage('You are Not Signed In!');	
		  			
	}


	public function getSignIn(){
		return View::make('signin');
	}
	
	public function getSignOut(){
		Auth::logout();
		return View::make('signin');
	}


	public function manageTimesheets(){
		$adder = Auth::user()->id;
		$users = User::where('created_by', '=' , $adder)->get();

		return View::make('tasks.index', compact('users'));
	}


	public function addTasks(){

			$task = Input::get('mytext[]');
			$task = new Task();
			$task->task_name= $task;
			$task->save();
			return View::make('superUserManageTimesheets');

	}

	// public function createTimesheet(){
	// 	$userID = User::findOrFail($id);
	// 	return $userID;	

	// }


	public function getSupervisorHome(){

		return View::make('users.supervisor.supervisorHome');
	}

}
