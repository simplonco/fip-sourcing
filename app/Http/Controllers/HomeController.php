<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth')->except('home');
  }

  public function home(){
      // if(auth()->user()->roles[0]->name == "former") {
      //    return redirect()->route('recruiterHome');
      // } else

      if(auth()->check()) {
         return redirect()->route('dashboard');
      }
      return redirect()->route('login');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $roleUser = Auth::user()->roles->implode('name');

    if ($roleUser == 'admin') {
      return redirect()->route('admin');
    } elseif ($roleUser == 'learner') {
      return view('candidate.panel');
    } elseif ($roleUser == 'former') {
      return redirect()->route('recruiterIndex');
    }
  }


  public function language()
  {
    $newLocale = Session::get('applocale') == 'fr' ? 'en' : 'fr';
    Session::put('applocale', $newLocale);
    return Redirect::back();
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function confirmpage()
  {
    return view('confirmInscript');
  }
}
