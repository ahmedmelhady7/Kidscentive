<?php

class Kid extends Eloquent {
	protected $table = "kids";

	public function user() {
		return $this -> morphMany('User', 'userable');
	}

}
