<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use User;
use Config;
use App\Models\Role;
use App\Models\Formation;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;


class FormerController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function list(Request $request)
  {

    $roleId = Config::get('role_constants.roles.former');
    $formateurs = User::whereHas('roles', function ($q) use ($roleId) {
      $q->where('role_id', $roleId);
    })->get();

    return view('admin.former.list', ['formateurs'=>$formateurs]);
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('admin.former.list');
  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $formations = Formation::pluck('name', 'id');
    return view('admin.former.create', ['formations'=> $formations]);
  }



  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate($request, [
      'last_name' => 'required|max:255',
      'first_name' => 'required',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
    ]);

    $user = [
      'last_name' => $request->input('last_name'),
      'first_name' => $request->input('first_name'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password'))
    ];

    $created_user = User::create($user);
    $created_user->roles()->attach(Role::where('name', 'former')->first());

    $input = $request->all();
    if (array_key_exists('formations', $input)){
      $formations_ids = $input['formations'];
      foreach ($formations_ids as $formation_id) {
        $created_user->formations()->attach($formation_id);
      }
    }

    $created_user->save();

    Session::flash('flash_message', __('admin_panel.former_created'));

    return redirect()->route('admin.trainers.index');
  }



  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $former = User::findOrFail($id);
    return view('admin.former.show', ['former'=>$former]);
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $former = User::findOrFail($id);

    $formations = Formation::pluck('name', 'id');
    return view('admin.former.edit', ['formations'=> $formations, 'former'=>$former]);
  }



  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update($id, Request $request)
  {
    $former = User::findOrFail($id);

    $this->validate($request, [
      'last_name' => 'required|max:255',
      'first_name' => 'required',
      'email' => 'required|string|email|max:255'
    ]);

    $input = $request->all();
    $former->formations()->detach();
    if (array_key_exists('formations', $input)){
      $formations_ids = $input['formations'];
      foreach ($formations_ids as $formation_id) {
        $former->formations()->attach($formation_id);
      }
    }

    $former->last_name = $input['last_name'];
    $former->first_name = $input['first_name'];
    $former->email = $input['email'];
    $former->save();

    Session::flash('flash_message', __('admin_panel.former_updated'));

    return redirect()->route('admin.trainers.index');
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $former = User::findOrFail($id);

    $former->delete();

    Session::flash('flash_message', __('admin_panel.former_removed'));

    return redirect()->route('admin.trainers.index');
  }
}
