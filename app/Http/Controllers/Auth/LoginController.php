<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Autch;

class LoginController extends Controller
{
	
	/*
	|--------------------------------------------------------------------------
	    | Login Controller
	    |--------------------------------------------------------------------------
	    |
	    | This controller handles authenticating users for the application and
	    | redirecting them to your home screen. The controller uses a trait
	    | to conveniently provide its functionality to your applications.
	    |
	    */
	
	protected function authenticades (Request $request, $user) {
		if (Auth::user()->roles == 'admin') {
			return Redirect()->route('admin');
		}
		elseif (Auth::user()->roles == 'Can') {
			return Redirect()->route('candidat');
		}
		elseif (Auth::user()->roles == 'forma') {
			return Redirect()->route('formateur');
		}
	}
	
	use AuthenticatesUsers;
	
	
	
	/**
	*Where to redirect users after login.
	    *
	    * @var string
	    */
	protected $redirectTo = '/home';
	
	
	/**
	*Create a new controller instance.
	    *
	    * @return void
	    */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}
}
