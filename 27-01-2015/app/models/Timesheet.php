<?php

class Timesheet extends \Eloquent {
public function tasks()
    {
        return $this->belongsToMany('Task');
    }
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['task','time_spent','date','description'];

}