<?php

class NerdController extends \BaseController {

	/**
	 * Display a listing of nerds
	 *
	 * @return Response
	 */
	public function index()
	{
		$nerds = Nerd::all();

		return View::make('nerds.index', compact('nerds'));
	}

	/**
	 * Show the form for creating a new nerd
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('nerds.create');
	}

	/**
	 * Store a newly created nerd in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$validator = Validator::make($data = Input::all(), Nerd::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Nerd::create($data);

		return Redirect::route('nerds.index');
	}

	/**
	 * Display the specified nerd.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$nerd = Nerd::findOrFail($id);

		return View::make('nerds.show', compact('nerd'));
	}

	/**
	 * Show the form for editing the specified nerd.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$nerd = Nerd::find($id);

		return View::make('nerds.edit', compact('nerd'));
	}

	/**
	 * Update the specified nerd in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$nerd = Nerd::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Nerd::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$nerd->update($data);

		return Redirect::route('nerds.index');
	}

	/**
	 * Remove the specified nerd from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Nerd::destroy($id);

		return Redirect::route('nerds.index');
	}

}
