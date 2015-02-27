<?php



/**********************************************************
 public routes
**********************************************************/



Route::get('/superUserCreateTimesheet', function()
{   
    	//working
    return View::make('users.superUserCreateTimesheet');
		
});




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



/*
|--------------------------------------------------------------------------
| Registration Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('signin', array( 

		'as' => 'account-sign-in' , 
		'uses' => 'UsersController@getSignIn'

	));

/*
|--------------------------------------------------------------------------
| Authenticated Route Group
|--------------------------------------------------------------------------
*/


Route::group(array('before' => 'auth') , function(){


		/*
		|--------------------------------------------------------------------------
		| Super User Route Group
		|--------------------------------------------------------------------------
		*/
		Route::group(array('before' => 'superUser') , function(){
			
					Route::get('/superUserHome' , array(
									'as' => 'superUserHome',
									'uses' => 'UsersController@index'
					));

					Route::get('/superUserHome/manageTimesheets' , array(
									'as' => 'manageTimesheets',
									'uses' => 'UsersController@manageTimesheets'
					));

					Route::get('/superUserHome/manageTimesheets/addTasks' , array(
									'as' => 'addTasks',
									'uses' => 'UsersController@addTasks'
					));


					Route::get('/superUserHome/manageTimesheets/addTask' , array(
									'as' => 'editMore',
									'uses' => 'TasksController@create'
					));

					//Route::resource('tasks', 'TasksController');

					Route::get('/superUserHome/manageTimesheets/createTimesheet' , array(
									'as' => 'createTimesheet',
									'uses' => 'TasksController@edit'
					));

					Route::get('/superUserHome/pendingTimesheets' , array(
						'as' => 'pendingTimesheet',
						'uses' => 'TimesheetsController@pendingTimesheet' 

					));


					Route::get('/superUserHome/pendingTimesheets/viewTimesheetBeforeAcceptance/{id}' , array(
						'as' => 'viewTimesheetBeforeAcceptance',
						'uses' => 'TimesheetsController@viewTimesheetBeforeAcceptance' 

					));

					Route::get('/superUserHome/reviewTimesheet/{id}' , array(
									'as' => 'reviewTimesheet',
									'uses' => 'TimesheetsController@reviewTimesheet'
								
					));

					Route::get('/superUserHome/acceptTimesheet/{id}' , array(
									'as' => 'acceptTimesheet',
									'uses' => 'TimesheetsController@acceptTimesheet'
								
					));


					Route::get('/superUserHome/rejectTimesheet/{id}' , array(
									'as' => 'rejectTimesheet',
									'uses' => 'TimesheetsController@rejectTimesheet'
								
					));
					

					
		});


		/*
		|--------------------------------------------------------------------------
		| supervisor Route Group
		|--------------------------------------------------------------------------
		*/
		Route::group(array('before' => 'supervisor') , function(){
			
					Route::get('/supervisorHome' , array(
									'as' => 'supervisorHome',
									'uses' => 'UsersController@getSupervisorHome'
					));

					Route::get('/supervisorHome/fillTimesheet' , array(
									'as' => 'ViewTimesheet',
									'uses' => 'UsersController@ViewTimesheet'
					));

					Route::get('/supervisor/euser', function(){   
					    		//working
					   			 return View::make('timesheets.euserh');
							
					});

					Route::get('/supervisorHome/TimesheetsToBeFilled' , array(
									'as' => 'issuedTimesheet',
									'uses' => 'TimesheetsController@issuedTimesheet'
					));

					Route::get('/supervisorHome/TimesheetsToBeFilled/fillTimesheet/{id}' , array(
									'as' => 'fillTimesheet',
									'uses' => 'TimesheetsController@fillTimesheet'
								
					));


					Route::get('/supervisorHome/pendingTimesheets' , array(
									'as' => 'pendingTimesheets',
									'uses' => 'TimesheetsController@pendingTimesheets'
								
					));

					Route::get('/supervisorHome/reviewTimesheets/{id}' , array(
									'as' => 'reviewTimesheets',
									'uses' => 'TimesheetsController@reviewTimesheets'
								
					));


					Route::get('/supervisorHome/submitTimesheets/{id}' , array(
									'as' => 'submitTimesheet',
									'uses' => 'TimesheetsController@submitTimesheet'
								
					));



			        
		});


		/*
		|--------------------------------------------------------------------------
		| Signout Route
		|--------------------------------------------------------------------------
		*/

		Route::get('account/signin' , array(
									'as' => 'account-sign-out' ,
									'uses' => 'UsersController@getSignOut'
		));

});



Route::get('/getSignIn', array('as' => 'account-status', 'uses' => 'UsersController@accountStatus'));



Route::post('account/sign-in', array( 'as' => 'account-sign-in-post' ,  'uses'=>'UsersController@postSignIn' ));



// Route::get('user', array('before' => 'auth', function(){

// 	return View::make('users.user');
// }));




/*
|--------------------------------------------------------------------------
| Routes to be Secured
|--------------------------------------------------------------------------
|
| 	These are the Routes for Logged In Users (NEED TO BE SECURED / TO BE ACCESSED AFTER LOGIN)
*/

// Route::group(array('before' => 'auth'), function(){
// /*
// | Super User login routes group
// */

//       Route::group(array('before' => 'SuperUser'), function(){
   
//               Route::get('admin_about', function(){
//                   return View::make('admin.about');
//               });
//               Route::get('admin_contacts', function(){
//                   return View::make('admin.contacts');
//               });
//               Route::get('admin_services', function(){
//                   return View::make('admin.services');
//               });
//       });
// /*
// | Supervisor login routes group
// */
// });


Route::get('/createProjects', array('as' => 'normindex', function()
{
   return View::make('projects.create');
}));



Route::get('/buildOrg', function()
{   
    	//working
    return View::make('users.superUser.build_Org');
		
});


Route::get('/setHierarchy', function()
{   
    	//working
    return View::make('users.superUser.set_hierarchy');
		
});


Route::get('/add', function()
{   
    	//working
    return View::make('users.superUser.add_new_level');
		
});


Route::get('/pending', function()
{   
      //working
    return View::make('timesheets.pendingTimesheets');
    
});


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




// Route::get('/index', function()
// {   
//     	//working
//     return View::make('index');
		
// });









// Route::get('/account/sign-in', array( 

// 		'as' => 'home' , 
// 		'uses' => 'UsersController@goToHome'


// 	));




// Route::get('/signin', function()
// {   
//     	//working
//     return View::make('signin');
		
// });


//Route::get('/signin',  array('as' => 'account-status' , 'uses' => 'UsersController@accountStatus' ) );


Route::get('/users/create', array('as' => 'newHierarchy', 'uses' => 'functionalities.create'));
Route::get('/users', array('as' => 'new', 'uses' => 'FunctionalitiesController@index'));
Route::get('/users/create/{code}' , array('as' => 'account-activate' , 'uses' => 'DemographicsController@getActivate'));









Route::get('/psetting', function()
{   
    	//working
    return View::make('users.productOwner.PSetting');
		
});
Route::get('/lholders', function()
{   
    	//working
    return View::make('users.productOwner.LHolders');

});
Route::get('/tusers', function()
{   
    	//working
    return View::make('users.productOwner.TVUsers');
		
});

Route::get('/phome', function()
{   
    	//working
    return View::make('users.productOwner.POHome');
		
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

Route::resource('licennses', 'LicennsesController');

Route::resource('PackageInfos', 'PackageInfosController');

Route::resource('organizations', 'OrganizationsController');

Route::resource('demographics', 'DemographicsController');

Route::resource('users', 'UsersController');

Route::resource('departments', 'DepartmentsController');

Route::resource('logs', 'LogsController');

Route::resource('degrees', 'DegreesController');

Route::resource('roles', 'RolesController');

Route::resource('skills', 'SkillsController');

Route::resource('functionalities', 'FunctionalitiesController');

Route::resource('projects', 'ProjectsController');

Route::resource('timesheets', 'TimesheetsController');

Route::resource('tasks', 'TasksController');






/////////////////////////////////////////end user route/////////////////////////////////////////////////////////////
/////////////////////////////////////////end user route/////////////////////////////////////////////////////////////
/////////////////////////////////////////end user route/////////////////////////////////////////////////////////////
/////////////////////////////////////////end user route/////////////////////////////////////////////////////////////











/////////////////////////////////////////end user route/////////////////////////////////////////////////////////////
/////////////////////////////////////////end user route/////////////////////////////////////////////////////////////
/////////////////////////////////////////end user route/////////////////////////////////////////////////////////////
