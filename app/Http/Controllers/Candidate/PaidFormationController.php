<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\PaidFormation;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class PaidFormationController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function list(Request $request)
  {

    $candidate_id = Auth::user()->id;
    $paidFormations = PaidFormation::whereHas('user', function ($q) use ($candidate_id) {
      $q->where('user_id', $candidate_id);
    })->get();

    return view('paid_formation.list', ['paidFormations'=>$paidFormations]);
  }

  /**
  * Display a form to create a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('paid_formation.create');
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
      'name' => 'required|string|max:255',
      'begin_date' => 'required',
      'end_date' => 'required',
      'contact' => 'required|string'
    ]);

    $candidate = Auth::user();

    $paid_formation = new PaidFormation;
    $paid_formation->name = $request->name;
    $paid_formation->begin_date = $request->begin_date;
    $paid_formation->end_date = $request->end_date;
    $paid_formation->contact = $request->contact;
    $paid_formation->user()->associate($candidate);
    $paid_formation->save();

    Session::flash('flash_message', 'La formation rémunérée a été ajoutée avec succès!');

    return redirect()->route('paidFormationList');
  }



  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $paid_formation = PaidFormation::findOrFail($id);

    return view('paid_formation.show', compact('paid_formation'));
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $paid_formation = PaidFormation::findOrFail($id);

    return view('paid_formation.edit')->withPaidFormation($paid_formation);
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
    $paid_formation = PaidFormation::findOrFail($id);

    $this->validate($request, [
      'name' => 'required|string|max:255',
      'begin_date' => 'required',
      'end_date' => 'required',
      'contact' => 'required|string'
    ]);

    $input = $request->all();

    $paid_formation->fill($input)->save();

    Session::flash('flash_message', 'La formation rémunérée a été modifiée avec succès!');

    return redirect()->route('paidFormationList');
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $paid_formation = PaidFormation::findOrFail($id);

    $paid_formation->delete();

    Session::flash('flash_message', 'La formation rémunérée a été supprimée avec succès!');

    return redirect()->route('paidFormationList');
  }
}
