<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

        $user = User::where('email', $request->email)->first();
        if($user){
            $this->broker()->sendResetLink(['email'=>$user->email]);
            return redirect()->back()->with('alert-error', __("Un lien de confirmation a déjà été envoyé à cette adresse email, veuillez vérifier dans votre spam si vous ne l'avez reçu! Néanmoins nous vous l'avons renvoyé"));

        }else{

            $user = new User();
            $user->email = $request->input('email');
            $user->save();
            $this->broker()->sendResetLink(['email'=>$user->email]);
            return redirect()->back()->with('alert-success', __("Le lien d'activation de votre compte a été envoyé à votre addresse mail"));
        }

    }
}
