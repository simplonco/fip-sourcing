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
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $roleUser = Auth::User()->roles->implode('name');
    $idUser = Auth::User()->id;

    if ($roleUser == 'admin') {
      return Redirect()->route('admin');
    } elseif ($roleUser == 'learner') {
      return view('candidate.panel');
    } elseif ($roleUser == 'former') {
      return Redirect()->route('recruiterIndex');
    }
  }

  public function unauthorized()
  {
    return view('unauthorized');
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
