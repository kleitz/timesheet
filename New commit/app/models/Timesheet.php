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
	protected $fillable = ['time_spent','user_id','task_id','sup_id','status','date','description'];

}
