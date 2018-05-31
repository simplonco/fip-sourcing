<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use User;
use App\Models\Formation;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class FormationController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function list(Request $request)
  {

    $formations = Formation::All();

    return view('admin.formation.list', ['formations'=>$formations]);
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('admin.formation.list');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function formerCreate()
  {
    return view('admin.formation.createUpdate', ['adminTrainings' => 'create']);
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

    Session::flash('flash_message', __('admin_panel.formation_created'));

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
    $today = Carbon::now(2);
    return view('admin.formation.show', compact(['formation', 'today']));
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

    return view('admin.formation.createUpdate', ['adminTrainings' => 'edit'])->withFormation($formation);
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

    Session::flash('flash_message', __('admin_panel.formation_updated'));

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

    Session::flash('flash_message', __('admin_panel.formation_removed'));

    return redirect()->route('formationList');
  }
}
