<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Paarent extends Eloquent implements UserInterface, RemindableInterface {

	protected $table = "parents";

	public function user() {
		return $this -> morphMany('User', 'userable');
	}

}