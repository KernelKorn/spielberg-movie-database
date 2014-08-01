<?php

class UserTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'firstname'	=> 'Ryan',
			'lastname'	=> 'Corn',
			'email'		=> 'kern@email.com',
			'password'	=> Hash::make('password')
		));
	}
}