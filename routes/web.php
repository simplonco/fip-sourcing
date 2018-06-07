<?php
/*
-----------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
  return redirect()->route('welcome');
})->name('home');


Route::get('/', 'HomeController@home')->name('welcome');
Route::post('/inscription', 'Auth\LoginController@sendLink')->name('auth.register');


Auth::routes();

// Test custom form
Route::get('/formulaire', 'CustomFormController@loadForm')->name('form.load');
Route::post('/enregistrer/formulaire', 'CustomFormController@saveForm')->name('form.save');
Route::get('/creer/question', 'CustomFormController@createQuestion')->name('question.create');
Route::post('/enregistrer/question', 'CustomFormController@saveQuestion')->name('question.save');
Route::get('/reponses', 'CustomFormController@showAnswers')->name('answers.show');


Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/unauthorized', 'HomeController@unauthorized')->name('unauthorized');

Route::get('/language', 'HomeController@language')->name('language');

/*Route::group(['middleware'=>['auth', 'candidate']], function () {
  Route::get('/candidate/formation', 'Candidate\CandidateController@chooseFormation')->name('chooseFormation');
  Route::get('/candidate/formation/store/{id}', 'Candidate\CandidateController@storeFormation')->name('storeFormation');

  Route::get('/candidate/operationnal/choose', 'Candidate\CandidateController@chooseOperationnal')->name('chooseOperationnal');
  Route::post('/candidate/operationnal/store', 'Candidate\CandidateController@storeOperationnal')->name('storeOperationnal');

  Route::get('/candidate/administrative/choose', 'Candidate\CandidateController@chooseAdministrative')->name('chooseAdministrative');
  Route::post('/candidate/administrative/store', 'Candidate\CandidateController@storeAdministrative')->name('storeAdministrative');

  Route::get('/candidate/experience/choose', 'Candidate\CandidateController@chooseExperience')->name('chooseExperience');
  Route::post('/candidate/experience/store', 'Candidate\CandidateController@storeExperience')->name('storeExperience');

  Route::get('/candidate/coding/choose', 'Candidate\CandidateController@chooseCoding')->name('chooseCoding');
  Route::post('/candidate/coding/store', 'Candidate\CandidateController@storeCoding')->name('storeCoding');

  Route::get('/candidate/projection/choose', 'Candidate\CandidateController@chooseProjection')->name('chooseProjection');
  Route::post('/candidate/projection/store', 'Candidate\CandidateController@storeProjection')->name('storeProjection');

  Route::get('/candidate/application/confirm', 'Candidate\CandidateController@confirmSendApplication')->name('confirmSendApplication');
  Route::post('/candidate/application/send', 'Candidate\CandidateController@sendApplication')->name('sendApplication');

  Route::get('/candidate/scoreDetails', 'Candidate\CandidateController@scoreDetails')->name('scoreDetails');

  Route::get('/candidate/refreshSololearn', 'Candidate\CandidateController@refreshSololearn')->name('refreshSololearn');
  Route::put('/candidate/answer/update', 'Candidate\CandidateController@updateAnswer');
  Route::put('/candidate/session', 'Candidate\CandidateController@updateSession');
});*/

Route::group(['middleware'=>'admin'], function () {
  // Admin panel
  Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');
  Route::get('/admin/utilisateurs', 'Admin\AdminController@showUsers')->name('admin.users.index');
  Route::get('/admin/utilisateurs/creer/', 'Admin\AdminController@createUser')->name('admin.users.create');
  Route::get('/admin/utilisateurs/editer/{id}', 'Admin\AdminController@editUser')->name('admin.users.edit');
  Route::post('/admin/utilisateurs/enregistrer/{id?}', 'Admin\AdminController@save')->name('admin.users.save');

  // CRUD recruteur ----------------JJJJJJJJJ----------------
  Route::get('/admin/formateurs', 'Admin\FormerController@list')->name('admin.trainers.index'); 
  Route::get('/admin/formateurs/nouveau', 'Admin\FormerController@create')->name('admin.trainers.create');
  Route::post('/admin/former/store', 'Admin\FormerController@store')->name('admin.trainers.store');
  Route::get('/admin/former/show/{id}', 'Admin\FormerController@show')->name('admin.trainers.show');
  Route::get('/admin/former/edit/{id}', 'Admin\FormerController@edit')->name('admin.trainers.edit');
  Route::post('/admin/former/update/{id}', 'Admin\FormerController@update')->name('admin.trainers.update');
  Route::get('/admin/former/delete/{id}', 'Admin\FormerController@destroy')->name('admin.trainers.destroy');

  // CRUD formation
  Route::get('/admin/formation/list', 'Admin\FormationController@list')->name('admin.courses.list');
  Route::get('/admin/formation/create', 'Admin\FormationController@formerCreate')->name('admin.courses.create');
  Route::post('/admin/formation/store', 'Admin\FormationController@store')->name('admin.courses.store');
  Route::get('/admin/formation/show/{id}', 'Admin\FormationController@show')->name('admin.courses.show');
  Route::get('/admin/formation/edit/{id}', 'Admin\FormationController@edit')->name('admin.courses.edit');
  Route::post('/admin/formation/update/{id}', 'Admin\FormationController@update')->name('admin.courses.update');
  Route::get('/admin/formation/delete/{id}', 'Admin\FormationController@destroy')->name('admin.courses.destroy');

  //CRUD session
  Route::get('/admin/formation/show/{id}/session/create', 'Admin\SessionController@create')->name('admin.session.create');
  Route::post('/admin/formation/show/{id}/session/save', 'Admin\SessionController@save')->name('admin.session.save');
  Route::get('/admin/session/edit/{id}', 'Admin\SessionController@edit')->name('admin.session.edit');
  Route::post('/admin/session/update/{id}', 'Admin\SessionController@update')->name('admin.session.update');
  Route::get('/admin/session/show/{id}', 'Admin\SessionController@show')->name('admin.session.show');


    // Autocomplete questionnaire
  Route::get('typeahead-search',array('as'=>'typeahead.search','uses'=>'Admin\FormationController@formerCreate'));
  Route::get('typeahead-response',array('as'=>'typeahead.response','uses'=>'Admin\QuestionnaireController@typeahead'));
  // CRUD candidat
  Route::get('/admin/candidate/list', 'Admin\CandidateController@list')->name('admin.applicant.index');
  Route::get('/admin/candidate/create', 'Admin\CandidateController@create')->name('admin.applicant.create');
  Route::post('/admin/candidate/store', 'Admin\CandidateController@store')->name('admin.applicant.store');
  Route::get('/admin/candidate/show/{id}', 'Admin\CandidateController@show')->name('admin.applicant.show');
  Route::get('/admin/candidate/edit/{id}', 'Admin\CandidateController@edit')->name('admin.applicant.edit');
  Route::post('/admin/candidate/update/{id}', 'Admin\CandidateController@update')->name('admin.applicant.update');
  Route::get('/admin/candidate/delete/{id}', 'Admin\CandidateController@destroy')->name('admin.applicant.destroy');
}
);

Route::group(['middleware' => 'recruiter'], function () {

  Route::get('/recruiter','Recruiter\FormationController@recruiterHome' )->name('trainer');
  Route::get('/recruiter/formations', 'Recruiter\FormationController@recruiterIndex')->name('trainer.index');
  Route::get('/recruiter/formations/show', 'Recruiter\FormationController@recruiterFormations')->name('trainer.courses.index');
  Route::get('/recruiter/formation/create', 'Recruiter\FormationController@recruiterFormationCreate')->name('trainer.courses.create');
  Route::post('/recruiter/formation/save', 'Recruiter\FormationController@recruiterFormationSave')->name('trainer.courses.save');

  Route::get('/recruiter/formation/show/{id}', 'Recruiter\FormationController@recruiterFormationShow')->name('trainer.courses.show');
  Route::get('/recruiter/formation/edit/{id}', 'Recruiter\FormationController@recruiterFormationEdit')->name('trainer.courses.edit');
  Route::post('/recruiter/formation/update/{id}', 'Recruiter\FormationController@recruiterFormationUpdate')->name('trainer.courses.update');
//   Route::get('/recruiter/formation/candidate/search', 'Recruiter\CandidateController@recruiterCandidateSearch')->name('candidateSearch');
  Route::get('/recruiter/formation/mail', 'Recruiter\FormationController@sendMail')->name('trainer.mailing');

//   Route::get('/recruiter/formation/candidate/show/{candidate_id}/{formation_id}', 'Recruiter\CandidateController@candidateFormationShow')->name('candidateFormationShow');
//   Route::get('/recruiter/formation/candidate/evaluate/{candidate_id}/{formation_id}', 'Recruiter\CandidateController@candidateFormationEvaluate')->name('candidateFormationEvaluate');
//   Route::post('/recruiter/formation/candidate/sendEvaluation/{id}', 'Recruiter\CandidateController@candidateFormationSendEvaluation')->name('candidateFormationSendEvaluation');
//   Route::get('/recruiter/formation/refreshFormationSololearn/{formation_id}', 'Recruiter\CandidateController@refreshFormationSololearn')->name('refreshFormationSololearn');
});


if (App::environment('local') && config('app.debug')) {
    Route::get('/loginas/{user}', function(App\Models\User $user) {
        Auth::login($user);
        return back();
    });
}