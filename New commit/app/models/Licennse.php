<?php

class Licennse extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['notify_before', 'license_period' , 'trial_period' ];

}