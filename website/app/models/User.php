<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryUserModel;

class User extends SentryUserModel {

	/**
	 * Indicates if the model should soft delete.
	 *
	 * @var bool
	 */
	protected $softDelete = true;


	public function profile() {
		return $this->belongsTo('Profile');
	}

	public function feeds() {
		return $this->hasMany('Feed');
	}

	




}
