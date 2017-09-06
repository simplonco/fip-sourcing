<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      return Redirect()->route('formateur');
    }
  }

  public function unauthorized()
  {
    return view('unauthorized');
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
