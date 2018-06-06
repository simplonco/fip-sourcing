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
        return view('admin.formation.session.createUpdate', ['adminSession' => 'create', 'formation_id' =>$id, 'training' => $training, 'session' ]);
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

        Session::flash('flash_message', __('la session a bien été creée'));

        return redirect()->route('formationShow', $session->formation_id);
    }

    public function edit($id){

        $session = FormationSession::findOrFail($id);
        $training = $session->formation;

        return view('admin.formation.session.createUpdate', ['adminSession' => 'edit', 'id' => $id, 'training' => $training])->withSession($session);
    }

    public function update(Request $request, $id){

        $session = FormationSession::findOrFail($id);
        
        $input = $request->all();

<<<<<<< HEAD
        $session->fill($input)->save();

        Session::flash('flash_message', __('session mise à jour !'));

        return redirect()->route('formationShow', $session->formation->id
        );
=======
         $session->fill($input)->save();

        Session::flash('flash_message', __('session mise à jour !'));
>>>>>>> d4821b7431ccea696d9296dd604f8548604cb0ea

        return redirect()->route('formationShow', $session->formation->id);

    }

}
