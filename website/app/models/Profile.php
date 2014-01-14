<?php

class Profile extends Eloquent {

	protected $table = 'user_profiles';
	protected $guarded = array();
	public static $rules = array();

	
	public function user() {
		return $this->belongsTo('User');
	}

}
