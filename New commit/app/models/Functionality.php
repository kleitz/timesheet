<?php

class Functionality extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['def_hierar' , 'manage_timesh' , 'appr_timesh' , 'manage_empl' , 'check_rep' ];

}