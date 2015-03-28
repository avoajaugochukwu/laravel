<?php

class CommentTableSeeder extends Seeder {

	public function run()
	{
		DB::table('comments')->delete();

		comment::create(array(
			'author' => 'Avoaja Ugochukwu',
			'text' => 'Look ma it is a comment'
		));

		comment::create(array(
			'author' => 'James Bond',
			'text' => 'I have very huge confidence'
		));

		comment::create(array(
			'author' => 'Lucas George',
			'text' => 'Star was cost me my life'
		));
	}

}