<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{



  /*
  ------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  protected function authenticated(Request $request, $user)
  {
    $roleUser = Auth::User()->roles->implode('name');
    $idUser = Auth::User()->id;
    if ($roleUser == 'admin') {
      return Redirect()->route('admin');
    } elseif ($roleUser == 'Can') {
      if (Form::all()->where('user_id', '=', $idUser)->first()) {
        if (Form::all()->where('user_id', '=', $idUser)->first()->statut_form == '0') {
          return Redirect('formcandidature');
        } else {
          return Redirect('/confirm');
        }
      } else {
        return Redirect('/formCivil');
      }
    } elseif ($roleUser == 'forma') {
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
