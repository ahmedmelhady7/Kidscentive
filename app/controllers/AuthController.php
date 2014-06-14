<?php
/**
 * Author : Ahmed El Hadi
 */
class AuthController extends Controller {

	function getLogin() {
		return View::make('login');
	}

	function getRegister() {
		return View::make('register');
	}

	function getAddTask() {
		return View::make('addtask');
	}

	function getEditTask() {
		$id = Input::get('id');
		echo 'hadi'.$id; 
		/*
		$task = Task::FindOrFail($id);
		return View::make('edittask')->with('task', $task);*/
	}	

	function postLogin() {
		$rules = array('username' => 'required', 'password' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator -> fails()) {
			return Redirect::route('login') -> withErrors($validator);
		}
		$auth = Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')), false);
		/*false remember me*/
		if (!$auth) {
			return Redirect::route('login') -> withErrors(array('Invalid credentials were provided. '));
		}
		return Redirect::route('home');
	}

	function postRegister() {
		$rules = array('username' => 'required', 'fullname' => 'required', 'password' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator -> fails()) {
			return Redirect::route('register') -> withErrors($validator);
		} else {
			$parent = new Paarent;
			$parent -> fullname = Input::get('fullname');
			$parent -> username = Input::get('username');
			$parent -> email = Input::get('email');
			$parent -> password = Hash::make(Input::get('password'));
			$parent -> role = Input::get('role');
			$parent -> save();
			return Redirect::route('login') -> with('message', 'Thanks for registering!');
		}
	}

	function postAddTask() {
		$rules = array('title' => 'required', 'points' => 'required');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator -> fails()) {
			return Redirect::route('addtask') -> withErrors($validator);
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
			return Redirect::route('home') -> with('message', 'your task has been added!');

		}
	}

	function postEditTask()
	{
		
	}

	function signout() {
		Auth::logout();
		return Redirect::to('login');
	}

}
