<?php

class HomeController extends BaseController {

	/*
	 |--------------------------------------------------------------------------
	 | Default Home Controller
	 |--------------------------------------------------------------------------
	 |
	 | You may wish to use controllers instead of, or in addition to, Closure
	 | based routes. That's great! Here is an example controller method to
	 | get you started. To route to this controller, just add the route:
	 |
	 |	Route::get('/', 'HomeController@showWelcome');
	 |
	 */

	public function showWelcome() {
		return View::make('hello');
	}

	public function getIndex() {
		$user = Auth::user();
		$fullname = $user -> fullname;
		$tasks = $user -> tasks;
		$isParent = $user -> type == 'parent';
		if (!$isParent)
			return View::make('home') -> with(array('user' => $user, 'isParent' => $isParent));
		return Redirect::route('kids.index');
	}
	
	public function incentives()
	{
		return View::make('incentives');	
	}

}
