<?php

class Task extends \Eloquent {
	public function timesheets()
    {
        return $this->belongsToMany('Timesheet');
    }

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['task_name', 'timesheet_id' , 'date'];

}