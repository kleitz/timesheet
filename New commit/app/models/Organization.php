<?php

class Organization extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['org_name', 'private_or_public' , 'user_name','package_id', 'license_id' , 'license_start_date' , 'license_end_date' , 'trial_start_date' , 'trial_end_date' , 'is_license_holder' , 'on_trial' , 'active' ];

}