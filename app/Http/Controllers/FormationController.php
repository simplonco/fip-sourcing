<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Formation;
use App\Form;
use Illuminate\Support\Facades\Session;
class FormationController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function list(Request $request)
  {

    $formations = Formation::All();

    return view('formation.list', ['formations'=>$formations]);
  }

  function add(Request $request)
  {

    $user = new Formation;
    $user->name = $request->input('name');
    $user->description = $request->input('description');
    $user->city = $request->input('city');
    $user->year = $request->input('year');
    $user->begin_session = $request->input('begin_session');
    $user->end_session = $request->input('end_session');
    // $user->roles()->sync(Role::where('id', 3))->first();
    return redirect()->route('formationList');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('formation.list');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function formerCreate()
  {
    return view('formation.create');
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
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
      'name' => 'required|max:255',
      'description' => 'required|max:255',
      'city' => 'required',
      'year' => 'required',
      'begin_session' => 'required',
      'end_session' => 'required',
    ]);

    $formation = [
      'name' => $request->input('name'),
      'description' => $request->input('description'),
      'city' => $request->input('city'),
      'year' => $request->input('year'),
      'begin_session' => $request->input('begin_session'),
      'end_session' => $request->input('end_session'),
    ];
    Formation::create($formation);

    Session::flash('flash_message', 'La formation a été ajoutée avec succès!');

    return redirect()->route('formationList');
  }



  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $formation = Formation::findOrFail($id);

    return view('formation.show', compact('formation'));
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }



  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $formation = Formation::findOrFail($id);

    $formation->delete();

    Session::flash('flash_message', 'La formation a été supprimée avec succès!');

    return redirect()->route('formationList');
  }
}
