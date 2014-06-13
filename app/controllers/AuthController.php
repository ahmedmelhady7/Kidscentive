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
			return Redirect::to('login') -> with('message', 'Thanks for registering!');
		}
	}

	function signout() {
		Auth::logout();
		return View::make('login');
	}

}
