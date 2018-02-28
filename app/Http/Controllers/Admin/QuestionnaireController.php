<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;

class QuestionnaireController extends Controller
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
    return view('admin.panel');
  }

  public function typeahead(Request $request){
    $query = $request->get('term','');        
    $questionnaires=Questionnaire::where('title','LIKE','%'.$query.'%')->get();        
    return response()->json($questionnaires);
  }

}
