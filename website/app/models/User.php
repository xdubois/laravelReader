<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryUserModel;

class User extends SentryUserModel {

	public static $rules = array( 'remember-me' => 'required',		
							  'email' => 'required|email',
							  'password' => 'required');

	protected $softDelete = true;


	public function profile() {
		return $this->belongsTo('Profile');
	}

	public function feeds() {
		return $this->hasMany('Feed');
	}

	




}
