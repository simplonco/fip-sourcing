<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Role;
use App\Formation;
use Illuminate\Support\Facades\Session;
class FormerController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function list(Request $request)
  {

    $roleId = 3;
    $formateurs = User::whereHas('roles', function ($q) use ($roleId) {
      $q->where('role_id', $roleId);
    })->get();

    return view('admin.former.list', ['formateurs'=>$formateurs]);
  }

  function add(Request $request)
  {

    $user = new User;
    $user->last_name = $request->input('last_name');
    $user->first_name = $request->input('first_name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->roles()->sync(Role::where('id', 3))->first();
    return redirect()->route('formerList');
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

    $formation = Formation::where('id', $request->input('formation'))->first();

    $created_user = User::create($user);
    $created_user->roles()->attach(Role::where('name', 'former')->first());

    $created_user->formations()->sync($formation);
    $created_user->save();

    Session::flash('flash_message', 'Le formateur a été ajouté avec succès!');

    return redirect()->route('formerList');
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

    return view('admin.former.show', compact('former'));
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

    // return view('former.edit')->withFormer($former);

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
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
    ]);

    $formation = Formation::where('id', $request->input('formation'))->first();

    $input = $request->all();

    $former->fill($input);
    $former->formations()->sync($formation);
    $former->save();

    Session::flash('flash_message', 'Le formateur a été modifié avec succès!');

    return redirect()->route('formerList');
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

    Session::flash('flash_message', 'Le formateur a été supprimé avec succès!');

    return redirect()->route('formerList');
  }
}
