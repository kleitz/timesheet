<?php

class OrganizationsController extends \BaseController {

	/**
	 * Display a listing of organizations
	 *
	 * @return Response
	 */
	public function index()
	{
		$organizations = Organization::all();
           $licennses = Licennse::all();
           
		return View::make('organizations.index', compact('organizations'));
	}

	/**
	 * Show the form for creating a new organization
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('organizations.create');
	}

	/**
	 * Store a newly created organization in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$rules = array('org_name' => array('min:2' , 'max:49'),
						    'private_or_public' => array('min:6' , 'max:7')
					  );








		$validator = Validator::make($data = Input::all(), Organization::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		} else { 

				$org_name = Input::get('org_name');
				$private_or_public = Input::get('private_or_public');
				
				$org = new Organization();
				$org->org_name = $org_name;
				$org->private_or_public =$private_or_public;
				$org->save();


		}

/*-------------------Organizations Data To Be Stored Here-------*/		

	 			
/*-------------------Organizations Data Storeage Ends Here-------*/
		
		Organization::create($data);

		return Redirect::route('organizations.index');
	}

	/**
	 * Display the specified organization.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$organization = Organization::findOrFail($id);

		return View::make('organizations.show', compact('organization'));
	}

	/**
	 * Show the form for editing the specified organization.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$organization = Organization::find($id);

		return View::make('organizations.edit', compact('organization'));
	}

	/**
	 * Update the specified organization in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$organization = Organization::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Organization::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$organization->update($data);

		return Redirect::route('organizations.index');
	}

	/**
	 * Remove the specified organization from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Organization::destroy($id);

		return Redirect::route('organizations.index');
	}

}
