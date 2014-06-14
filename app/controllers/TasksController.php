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
		$fullname = $user->fullname;
		$tasks = $user->tasks;
		return View::make('tasks.index')->with('tasks', $tasks);
	}

	public function create() {
		return View::make('tasks.create');
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
		$task = $this -> task -> FindOrFail($id);
		return View::make('tasks.show')->with('task', $task);
	}

	public function edit($id) {
		$task = $this -> task -> find($id);
		if (is_null($task))
			return Redirect::route('tasks.index');
		return View::make('tasks.edit')->with('task', $task);
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
	
	public function destroy($id)
	{
		$this->task->find($id)->delete();
		return Redirect::route('tasks.index');
	}

}
