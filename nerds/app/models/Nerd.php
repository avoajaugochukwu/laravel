<?php

class Nerd extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'name' => 'required',
			'email' => 'required|email',
			'nerd_level' => 'required|numeric'
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'email', 'nerd_level'];

}