<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\Captcha;
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
      $this->validate($request, [
         'email' => 'required',
         // 'g-recaptcha-response' => new Captcha
      ]);

        $user = User::where('email', $request->email)->first();
        if($user){

            return redirect()->back()->with('alert-error', __("Vous êtes déjà enregistré. Si vous avez déjà activé le lien de confirmation vous pouvez vous connectez ou sinon demander la réinitialisation de votre mot de passe dans la rubrique J'ai déjà un compte."));

        }else{

            $user = new User();
            $user->email = $request->input('email');
            $user->save();
            $this->broker()->sendResetLink(['email'=>$user->email]);
            return redirect()->back()->with('alert-success', __("Un lien d'activation de votre compte va être envoyé à l'adresse mail que vous avez indiqué. Pensez à vérifier dans vos spams si vous ne le retrouvez pas dans votre boîte de réception" ));
        }

    }
}
