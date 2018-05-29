<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
  /*
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('home', ['role' => 'admin']);
  }

  public function createUser(){
      return view('admin.createUser');
  }
  public function showUsers(){
      return view('admin.users');
  }
}
