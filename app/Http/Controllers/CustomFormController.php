<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class CustomFormController extends Controller
{
  /**
  *Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the form for loading the appropriate custom form.
  *
  * @return \Illuminate\Http\Response
  */
  public function loadForm()
  {
    // $candidate = Auth::user();

    return view('custom_form');
  }

  /**
  * Show the form for loading the appropriate custom form.
  *
  * @return \Illuminate\Http\Response
  */
  public function saveForm()
  {
    // $candidate = Auth::user();

    return view('home');
  }

}
