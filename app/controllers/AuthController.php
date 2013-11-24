<?php

class AuthController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controller for login and user authentication
	|--------------------------------------------------------------------------
	*/	
	
	public function login() {
		return View::make('loginform');
	}
	
	public function doLogin() {
		$username = Input::get('username');
		$password = Input::get('password');
		
		if(Auth::attempt(array('username' => $username, 'password' => $password))) {
			//User login succeded. If admin or author redirect to admin area. If commenter redirect to home page.
			//TODO Figure out how to redirect to page before login form.
			if(Auth::user()->type == "admin"|| Auth::user()->type == "author") {
				return Redirect::to('admin/view-posts');
			}
			else {
				return Redirect::to('/');
			}
		}
		else {
			//User login failed, redirect to login form
			return Redirect::to('login');
		}
	}
	
	public function doLogout() {
		Auth::logout();
		return Redirect::to('/');
	}
	
	public function createAccount() {
		if(Auth::check()) {
			return Redirect::to('/');
			
		}
		else {
			return View::make('accountform');
		}	
	}
	
	public function addAccount() {
		$name = Input::get('name');
		$username = Input::get('username');
		$password = Input::get('password');
		$password_confirm = Input::get('password_confirm');
		$email = Input::get('email');
		$type = 'user';
		
		$validator = Validator::make(
			array(
				'name' => $name,
				'username' => $username,
			 	'email' => $email,
			 	'password' => $password,
			 	'password_confirm' => $password_confirm,
			),
			array(
				'name' => 'required',
				'username' => 'required|unique:users,username',
				'email' => 'required|email',
				'password' => 'required|same:password_confirm',
				'password_confirm' => 'required'
			)
		);
		
		if($validator->fails()) {
			return Redirect::to('account/create')->withErrors($validator)->withInput(Input::except(array('password', 'password_confirm')));
		}
		else {
			User::createNewUser($name, $username, $email, $password, $type);
			
			if(Auth::attempt(array('username' => $username, 'password' => $password))) {
				return Redirect::to('/');
			}
			else {
				return Redirect::to('account/create');
			}
		}
	}
}