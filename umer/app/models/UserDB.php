<?php

class UserDB extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = array('fName', 'lName', 'city' ,'country' ,'phone' ,'answer');
	protected $guarded = array('email', 'password', 'repass');

}