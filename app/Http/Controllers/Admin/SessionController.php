<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Session as FormationSession;
use Illuminate\Support\Facades\Session;

use App\Models\Formation;

class SessionController extends Controller
{

    public function create($id)
    {
        $training = Formation::findOrFail($id);
        //dd($training);
        return view('admin.formation.session.createUpdate', ['adminSessions' => 'create', 'id' =>$id, 'training' => $training ]);
    }

    public function save(Request $request){

        $session = new FormationSession;

        $session->city = $request->input('city');
        $session->year = $request->input('year');
        $session->begin_session = $request->input('begin_session');
        $session->end_session = $request->input('end_session');
        $session->application_start_date = $request->input('application_start_date');
        $session->application_end_date = $request->input('application_end_date');
        $session->formation_id = $request->input('formation_id');

        $session->save();

        Session::flash('flash_message', __('la session a bien été ajoutée'));

        return redirect()->route('formationList');
    }

}
