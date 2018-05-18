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
});


Route::get('/', 'HomeController@home')->name('welcome');


Auth::routes();

// Test custom form
Route::get('/custom_form', 'CustomFormController@loadForm')->name('custom_form');
Route::post('/save_custom_form', 'CustomFormController@saveForm')->name('save_custom_form');
Route::get('/create_question', 'CustomFormController@createQuestion')->name('create_question');
Route::post('/save_question', 'CustomFormController@saveQuestion')->name('save_question');
Route::get('/show_results', 'CustomFormController@showAnswers')->name('show_results');


Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/unauthorized', 'HomeController@unauthorized')->name('unauthorized');

Route::get('/language', 'HomeController@language')->name('language');

Route::group(['middleware'=>['auth', 'candidate']], function () {
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
});

Route::group(['middleware'=>'admin'], function () {
  // Admin panel
  Route::get('/admin', 'Admin\AdminController@index')->name('admin');
  // CRUD recruteur
  Route::get('/admin/former/list', 'Admin\FormerController@list')->name('formerList');
  Route::get('/admin/former/create', 'Admin\FormerController@create')->name('formerCreate');
  Route::post('/admin/former/store', 'Admin\FormerController@store')->name('formerStore');
  Route::get('/admin/former/show/{id}', 'Admin\FormerController@show')->name('formerShow');
  Route::get('/admin/former/edit/{id}', 'Admin\FormerController@edit')->name('formerEdit');
  Route::post('/admin/former/update/{id}', 'Admin\FormerController@update')->name('formerUpdate');
  Route::get('/admin/former/delete/{id}', 'Admin\FormerController@destroy')->name('formerDelete');
  // CRUD formation
  Route::get('/admin/formation/list', 'Admin\FormationController@list')->name('formationList');
  Route::get('/admin/formation/create', 'Admin\FormationController@formerCreate')->name('formationCreate');
  Route::post('/admin/formation/store', 'Admin\FormationController@store')->name('formationStore');
  Route::get('/admin/formation/show/{id}', 'Admin\FormationController@show')->name('formationShow');
  Route::get('/admin/formation/edit/{id}', 'Admin\FormationController@edit')->name('formationEdit');
  Route::post('/admin/formation/update/{id}', 'Admin\FormationController@update')->name('formationUpdate');
  Route::get('/admin/formation/delete/{id}', 'Admin\FormationController@destroy')->name('formationDelete');
  // Autocomplete questionnaire
  Route::get('typeahead-search',array('as'=>'typeahead.search','uses'=>'Admin\FormationController@formerCreate'));
  Route::get('typeahead-response',array('as'=>'typeahead.response','uses'=>'Admin\QuestionnaireController@typeahead'));
  // CRUD candidat
  Route::get('/admin/candidate/list', 'Admin\CandidateController@list')->name('candidateList');
  Route::get('/admin/candidate/create', 'Admin\CandidateController@create')->name('candidateCreate');
  Route::post('/admin/candidate/store', 'Admin\CandidateController@store')->name('candidateStore');
  Route::get('/admin/candidate/show/{id}', 'Admin\CandidateController@show')->name('candidateShow');
  Route::get('/admin/candidate/edit/{id}', 'Admin\CandidateController@edit')->name('candidateEdit');
  Route::post('/admin/candidate/update/{id}', 'Admin\CandidateController@update')->name('candidateUpdate');
  Route::get('/admin/candidate/delete/{id}', 'Admin\CandidateController@destroy')->name('candidateDelete');
}
);

Route::group(['middleware' => 'recruiter'], function () {
    Route::get('/recruiter','Recruiter\FormationController@recruiterHome' )->name('recruiterHome');
    Route::get('/recruiter/formations', 'Recruiter\FormationController@recruiterIndex')->name('recruiterIndex');
    //Route::get('/recruiter/formations', 'Recruiter\FormationController@recruiterFormations')->name('recruiterFormations');
    Route::get('/recruiter/formation/create', 'Recruiter\FormationController@recruiterFormationCreate')->name('recruiterFormationCreate');
    Route::post('/recruiter/formation/save', 'Recruiter\FormationController@recruiterFormationSave')->name('recruiterFormationSave');

    Route::get('/recruiter/formation/show/{id}', 'Recruiter\FormationController@recruiterFormationShow')->name('recruiterFormationShow');
  Route::get('/recruiter/formation/edit/{id}', 'Recruiter\FormationController@recruiterFormationEdit')->name('recruiterFormationEdit');
  Route::post('/recruiter/formation/update/{id}', 'Recruiter\FormationController@recruiterFormationUpdate')->name('recruiterFormationUpdate');
  Route::get('/recruiter/formation/candidate/search', 'Recruiter\CandidateController@recruiterCandidateSearch')->name('candidateSearch');
  Route::get('/recruiter/formation/candidate/list/{id}/{order?}/{ascending?}', 'Recruiter\CandidateController@recruiterFormationCandidatesList')->name('recruiterFormationCandidatesList');
  Route::get('/recruiter/formation/candidate/show/{candidate_id}/{formation_id}', 'Recruiter\CandidateController@candidateFormationShow')->name('candidateFormationShow');
  Route::get('/recruiter/formation/candidate/evaluate/{candidate_id}/{formation_id}', 'Recruiter\CandidateController@candidateFormationEvaluate')->name('candidateFormationEvaluate');
  Route::post('/recruiter/formation/candidate/sendEvaluation/{id}', 'Recruiter\CandidateController@candidateFormationSendEvaluation')->name('candidateFormationSendEvaluation');
  Route::get('/recruiter/formation/refreshFormationSololearn/{formation_id}', 'Recruiter\CandidateController@refreshFormationSololearn')->name('refreshFormationSololearn');
});


if (App::environment('local') && config('app.debug')) {
    Route::get('/loginas/{user}', function(App\Models\User $user) {
        Auth::login($user);
        return back();
    });
}