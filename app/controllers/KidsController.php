<?php

/**
 * kids Controller
 */
class KidsController extends BaseController {

	protected $kid;

	public function __construct(Kid $kid) {
		$this -> kid = $kid;
	}

	public function index() {
		$user = Auth::user();
		$kids = $user -> kids;
		$isParent = $user -> type == 'parent';
		if ($isParent)
			return View::make('kids.index') -> with(array('kids' => $kids, 'user' => $user, 'isParent' => $isParent));
		return Redirect::route('home') -> with(array('kids' => $kids, 'user' => $user, 'isParent' => $isParent));
	}

	public function create() {
		return View::make('kids.create');
	}

	public function store() {
		$rules = array('fullname' => 'required', 'username' => 'required', 'password' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator -> fails()) {
			return Redirect::route('kids.create') -> withErrors($validator);
		} else {
			$kid = new User;
			$kid -> email = 'hadi2@gmail.com';
			$kid -> fullname = Input::get('fullname');
			$kid -> username = Input::get('username');
			$kid -> points = Input::get('points');
			$kid -> password = Hash::make(Input::get('password'));
			$kid -> parent1_id = Auth::user() -> id;
			$kid -> type = 'kid';
			$kid -> save();
			return Redirect::route('kids.index') -> with('message', 'your kid has been added!');

		}
	}

	public function show($id) {
		$kid = $this -> kid -> FindOrFail($id);
		return View::make('kids.show') -> with('kid', $kid);
	}

	public function edit($id) {
		$kid = $this -> kid -> find($id);
		if (is_null($kid))
			return Redirect::route('kids.index');
		return View::make('kids.edit') -> with('kid', $kid);
	}

	public function update($id) {
		$rules = array('username' => 'required', 'fullname' => 'required', 'points' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator -> fails()) {
			return Redirect::route('kids.edit', $id) -> withErrors($validator);
		} else {
			$kid = $this -> kid -> find($id);
			if (is_null($kid))
				return Redirect::route('kids.index');
			$kid -> fullname = Input::get('fullname');
			$kid -> username = Input::get('username');
			$kid -> points = Input::get('points');
			$kid -> parent1_id = Auth::user() -> id;
			$kid -> save();
			return Redirect::route('kids.show', $id) -> with('message', 'your kid has been saved!');

		}
	}

	public function destroy() {
		$id = Input::get('id');
		if ($this -> kid -> find($id) -> delete())
			;
		{
			return Redirect::route('kids.index') -> with('message', 'your kid was deleted');
		}
		return Redirect::route('kids.index') -> with('message', 'nothing was deleted');
	}

}
