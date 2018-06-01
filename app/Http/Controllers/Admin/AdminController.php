<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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
      return view('admin.createEditUser', ['action' => 'create']);
  }
  public function editUser($id){
      $user = User::findOrFail($id);
      return view('admin.createEditUser', ['action' => 'edit', 'id' => $id, 'user' => $user]);
  }

  public function save(Request $request)
  {
   if($request->id) {
      $user = User::findOrFail($request->id);
   } else {
      $user = new User;
   }

    $this->validate($request, [
      'last_name' => 'required|max:255',
      'first_name' => 'required',
      'email' => 'required|string|email|max:255'
    ]);

    $input = $request->all();

    $user->last_name = $input['last_name'];
    $user->first_name = $input['first_name'];
    $user->email = $input['email'];
    $user->save();

    Session::flash('flash_message', __('admin_panel.candidate_updated'));

    return redirect()->route('showUsers');
  }
  
  public function showUsers(){
   $users = user::All();

      return view('admin.list', ['list' => 'users',  'users'=>$users]);
  }
}
