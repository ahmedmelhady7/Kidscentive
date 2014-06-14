<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function tasks()
	{
		return $this->hasMany('Task', 'creator_id');
	}
	
	public function todotasks()
	{
		return $this->hasMany('Task', 'assignee_id');
	}
	
	public function kids()
	{
		return $this->hasMany('User', 'parent1_id');
	}

	/**
	 * The polymorphism method for the kids table
	 */
	public function userable()
    {
        return $this->morphTo();
    }

}
