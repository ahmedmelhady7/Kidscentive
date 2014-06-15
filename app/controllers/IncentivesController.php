<?php

class IncentivesController extends \BaseController {

	/**
	 * Display a listing of incentives
	 *
	 * @return Response
	 */
	public function index() {
		$incentives = Incentive::all();
		$user = Auth::user();
		return View::make('incentives.index') -> with(array('incentives' => $incentives, 'user' => $user));
	}

	/**
	 * Show the form for creating a new incentive
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('incentives.create');
	}

	/**
	 * Store a newly created incentive in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$incentive = new Incentive;
		$name = Input::get('name');
		$worth = Input::get('worth');
		$incentive -> name = $name;
		$incentive -> worth = $worth;
		$incentive -> save();
		return Redirect::route('incentives.index') -> with('message', 'your task has been added!');

	}

	/**
	 * Display the specified incentive.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$incentive = Incentive::findOrFail($id);

		return View::make('incentives.show', compact('incentive'));
	}

	/**
	 * Show the form for editing the specified incentive.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$incentive = Incentive::find($id);

		return View::make('incentives.edit', compact('incentive'));
	}

	/**
	 * Update the specified incentive in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$incentive = Incentive::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Incentive::$rules);

		if ($validator -> fails()) {
			return Redirect::back() -> withErrors($validator) -> withInput();
		}

		$incentive -> update($data);

		return Redirect::route('incentives.index');
	}

	/**
	 * Remove the specified incentive from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		Incentive::destroy($id);

		return Redirect::route('incentives.index');
	}

	public function purchase($id) {
		$incentive = Incentive::find($id);
		$user = Auth::user();
		if ($incentive -> worth  > $user -> points)
			return Redirect::route('incentives.index') -> with('message', 'you do not have enough points to purchase this item');
		else {
			$user->points = $user->points - $incentive->worth;
			$incentive -> purchased = true;
			$incentive -> purchaser_id = $user -> id;
			$user -> save();
			$incentive -> save();
			return Redirect::route('incentives.index') -> with('message', 'congrats !! you have purchased this item');
		}
	}

}
