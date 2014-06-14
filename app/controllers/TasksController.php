<?php

/**
 * Tasks Controller
 */
class TasksController extends BaseController {

	protected $task;

	public function __construct(Task $task) {
		$this -> task = $task;
	}

	public function index() {
		$user = Auth::user();
		$fullname = $user -> fullname;
		$tasks = $user -> tasks;
		return View::make('tasks.index') -> with(array('tasks'=>$tasks,'user'=>$user));
	}

	public function create() {
		$user = Auth::user();
		$kids = $user -> kids;
		return View::make('tasks.create') -> with(array('kids'=>$kids,'user'=>$user));
	}

	public function store() {
		$rules = array('title' => 'required', 'points' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator -> fails()) {
			return Redirect::route('tasks.create') -> withErrors($validator);
		} else {
			$task = new Task;
			$task -> title = Input::get('title');
			$task -> points = Input::get('points');
			$task -> priority = Input::get('priority');
			$task -> assignee_id = Input::get('assignee_id');
			$task -> creator_id = Auth::user() -> id;
			$task -> done = false;
			$task -> expiry_date = Input::get('expiry_date');
			$task -> save();
			return Redirect::route('tasks.index') -> with('message', 'your task has been added!');

		}
	}

	public function show($id) {
		$user = Auth::user();
		$task = $this -> task -> FindOrFail($id);
		return View::make('tasks.show') -> with(array('task'=>$task,'user'=>$user));
	}

	public function edit($id) {
		$user = Auth::user();
		$task = $this -> task -> find($id);
		if (is_null($task))
			return Redirect::route('tasks.index');
		return View::make('tasks.edit') -> with(array('task'=>$task,'user'=>$user));
	}

	public function update($id) {
		$rules = array('title' => 'required', 'points' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator -> fails()) {
			return Redirect::route('tasks.edit', $id) -> withErrors($validator);
		} else {
			$task = $this -> task -> find($id);
			if (is_null($task))
				return Redirect::route('tasks.index');
			$task -> title = Input::get('title');
			$task -> points = Input::get('points');
			$task -> priority = Input::get('priority');
			$task -> assignee_id = Input::get('assignee_id');
			$task -> creator_id = Auth::user() -> id;
			$task -> done = false;
			$task -> expiry_date = Input::get('expiry_date');
			$task -> save();
			return Redirect::route('tasks.show', $id) -> with('message', 'your task has been saved!');

		}
	}

	public function destroy($id) {
		$this -> task -> find($id) -> delete();
		return Redirect::route('tasks.index');
	}

	public function approve($id) {
		$task = $this -> task -> find($id);
		$assignee = Kid::find($task -> assignee_id);
		var_dump($assignee);
		if (!$task -> done) {
			$assignee -> points += $task -> points;
			$assignee -> save();
			$task -> done = true;
			$task -> save();
			return Redirect::route('kids.index');
		}
		else {
			return Redirect::route('kids.index')->with('message', 'you already approved this one');
		}
	}

}
