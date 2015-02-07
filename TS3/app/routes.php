<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{   
    	//working
    return View::make('index');
		
});

Route::get('/index', function()
{   
    	//working
    return View::make('index');
		
});



Route::get('/signin', function()
{   
    	//working
    return View::make('signin');
		
});



Route::get('/signup', function()
{   
    	//working
    return View::make('signup');
		
});



Route::get('/contact', function()
{   
    	//working
    return View::make('contact');
		
});



Route::get('/about', function()
{   
    	//working
    return View::make('about');
		
});

Route::get('/productOwner/setting', function()
{   
    	//working
    return View::make('users.productOwner.productSetting');
		
});



Route::get('/owner', function()
{   
    	//working
    return View::make('users.productOwner.productOwner_licHoldList');
		
});



Route::get('/superUser', function()
{   
    	//working
    return View::make('users.superUser.super_user');
		
});


Route::get('/db', function(){

	
		//working
	//$posts = DB::table('demographics')->where('id','=','1')->get();
	//dd($posts);

		// //working
 	//$posts = DB::table('demographics')->get(array('email'));
  	//dd($posts);

		//working	
    //$posts = Demographic::table('demographics')->where('id','=','2')->get(array('email'));
    //dd($posts);
		
		//not working
$result = DB::table('demographics')->where('id','6')->first();
return $result->lName;



		//inserting hard-coded values in the table "demographics" of database "Timesheet"
	// DB::table('demographics')->insert(
	// 	array('fName'=>'Fahad')
	// 	);
	// return DB::table('demographics')->get();


	// $result = DB::table('demographics')->where('lName','Mehdi')->first();
	// return $result->email; 
	


	// return DB::select('show tables;');
	//return DB::select('select database();');
});


Route::resource('licenses', 'LicensesController');

Route::resource('PackageInfos', 'PackageInfosController');

Route::resource('organizations', 'OraganizationsController');

Route::resource('demographics', 'DemographicsController');

Route::resource('users', 'UsersController');

Route::resource('departments', 'DepartmentsController');

Route::resource('logs', 'LogsController');

Route::resource('degrees', 'DegreesController');

Route::resource('roles', 'RolesController');

Route::resource('skills', 'SkillsController');

