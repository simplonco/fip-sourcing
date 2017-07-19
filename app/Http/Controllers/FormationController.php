<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Formation;
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

    $formation = new Formation;
    $formation->name = $request->input('name');
    $formation->description = $request->input('description');
    $formation->city = $request->input('city');
    $formation->year = $request->input('year');
    $formation->begin_session = $request->input('begin_session');
    $formation->end_session = $request->input('end_session');
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
    $formation = Formation::findOrFail($id);

    return view('formation.edit')->withFormation($formation);
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
    $formation = Formation::findOrFail($id);

    $this->validate($request, [
      'name' => 'required|max:255',
      'description' => 'required|max:255',
      'city' => 'required',
      'year' => 'required',
      'begin_session' => 'required',
      'end_session' => 'required',
    ]);

    $input = $request->all();

    $formation->fill($input)->save();

    Session::flash('flash_message', 'La formation a été modifiée avec succès!');

    return redirect()->route('formationList');
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
