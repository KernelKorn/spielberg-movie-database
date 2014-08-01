<?php

class UserController extends BaseController {

	public function index()
	{
		return View::make('users.index');
	}

	public function login()
	{
		$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

		if (Auth::attempt($userdata)) {
			return Redirect::intended('/')->with('message', 'You are now logged in!');
		} else {
			return Redirect::to('/login')
				->with('message', 'Your username/password combination was incorrect')
				->withInput();
		}
	}

	public function logout() {
		Auth::logout();
		return Redirect::to('/login')->with('message', 'You are now logged out!');
	}
}