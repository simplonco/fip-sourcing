<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

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
      return view('admin.createEditUser');
  }
  public function showUsers(){
   $users = user::All();

      return view('admin.list', ['list' => 'users',  'users'=>$users]);
  }
}
