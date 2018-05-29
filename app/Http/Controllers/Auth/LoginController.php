<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
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
    return redirect()->route('home');
  }

  use AuthenticatesUsers, SendsPasswordResetEmails;



  /**
  *Where to redirect users after login.
  *
  * @var string
  */
  protected $redirectTo = '/';


  /**
  *Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

    public function sendLink(Request $request){

        $user = new User();
        $user->email = $request->input('email');
        $user->save();
        $this->broker()->sendResetLink(['email'=>$user->email]);

       return redirect()->back()->with('alert-success', __("Le lien d'activation de votre compte a bien été envoyé à votre addresse mail"));
    }
}
