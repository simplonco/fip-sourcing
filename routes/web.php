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

Route::get('/', function () {
  return redirect('/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/unauthorized', 'HomeController@unauthorized')->name('unauthorized');

Route::get('/language', 'HomeController@language')->name('language');

// Candidate routes
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



Route::get('/candidate/hero/choose', 'Candidate\CandidateController@chooseHero')->name('chooseHero');
Route::post('/candidate/hero/store', 'Candidate\CandidateController@storeHero')->name('storeHero');
Route::get('/candidate/hack/choose', 'Candidate\CandidateController@chooseHack')->name('chooseHack');
Route::post('/candidate/hack/store', 'Candidate\CandidateController@storeHack')->name('storeHack');
Route::get('/candidate/course/choose', 'Candidate\CandidateController@chooseCourse')->name('chooseCourse');
Route::post('/candidate/course/store', 'Candidate\CandidateController@storeCourse')->name('storeCourse');
Route::get('/candidate/superpower/choose', 'Candidate\CandidateController@chooseSuperpower')->name('chooseSuperpower');
Route::post('/candidate/superpower/store', 'Candidate\CandidateController@storeSuperpower')->name('storeSuperpower');
Route::get('/candidate/motivation/choose', 'Candidate\CandidateController@chooseMotivation')->name('chooseMotivation');
Route::post('/candidate/motivation/store', 'Candidate\CandidateController@storeMotivation')->name('storeMotivation');

Route::get('/candidate/leisure/choose', 'Candidate\CandidateController@chooseLeisure')->name('chooseLeisure');
Route::post('/candidate/leisure/store', 'Candidate\CandidateController@storeLeisure')->name('storeLeisure');

Route::get('/candidate/badges/refresh', 'Candidate\CandidateController@refreshBadges')->name('refreshBadges');

Route::get('/candidate/followup/choose', 'Candidate\CandidateController@chooseFollowup')->name('chooseFollowup');
Route::post('/candidate/followup/store', 'Candidate\CandidateController@storeFollowup')->name('storeFollowup');

Route::get('/candidate/prescriber/choose', 'Candidate\CandidateController@choosePrescriber')->name('choosePrescriber');
Route::post('/candidate/prescriber/store', 'Candidate\CandidateController@storePrescriber')->name('storePrescriber');

Route::get('/candidate/activity_before/choose', 'Candidate\CandidateController@chooseActivityBefore')->name('chooseActivityBefore');
Route::post('/candidate/activity_before/store', 'Candidate\CandidateController@storeActivityBefore')->name('storeActivityBefore');

Route::get('/candidate/pro_experience/list', 'Candidate\ProExperienceController@list')->name('proExperienceList');
Route::get('/candidate/pro_experience/create', 'Candidate\ProExperienceController@create')->name('proExperienceCreate');
Route::post('/candidate/pro_experience/add', 'Candidate\ProExperienceController@add')->name('proExperienceAdd');
Route::get('/candidate/pro_experience/show/{id}', 'Candidate\ProExperienceController@show')->name('proExperienceShow');
Route::get('/candidate/pro_experience/edit/{id}', 'Candidate\ProExperienceController@edit')->name('proExperienceEdit');
Route::get('/candidate/pro_experience/delete/{id}', 'Candidate\ProExperienceController@destroy')->name('proExperienceDelete');
Route::post('/candidate/pro_experience/store', 'Candidate\ProExperienceController@store')->name('proExperienceStore');
Route::post('/candidate/pro_experience/update/{id}', 'Candidate\ProExperienceController@update')->name('proExperienceUpdate');

Route::get('/candidate/paid_formation/list', 'Candidate\PaidFormationController@list')->name('paidFormationList');
Route::get('/candidate/paid_formation/create', 'Candidate\PaidFormationController@create')->name('paidFormationCreate');
Route::post('/candidate/paid_formation/add', 'Candidate\PaidFormationController@add')->name('paidFormationAdd');
Route::get('/candidate/paid_formation/show/{id}', 'Candidate\PaidFormationController@show')->name('paidFormationShow');
Route::get('/candidate/paid_formation/edit/{id}', 'Candidate\PaidFormationController@edit')->name('paidFormationEdit');
Route::get('/candidate/paid_formation/delete/{id}', 'Candidate\PaidFormationController@destroy')->name('paidFormationDelete');
Route::post('/candidate/paid_formation/store', 'Candidate\PaidFormationController@store')->name('paidFormationStore');
Route::post('/candidate/paid_formation/update/{id}', 'Candidate\PaidFormationController@update')->name('paidFormationUpdate');

Route::get('/candidate/pro_project/choose', 'Candidate\CandidateController@chooseProProject')->name('chooseProProject');
Route::post('/candidate/pro_project/store', 'Candidate\CandidateController@storeProProject')->name('storeProProject');

Route::get('/candidate/situation/choose', 'Candidate\CandidateController@chooseSituation')->name('chooseSituation');
Route::post('/candidate/situation/store', 'Candidate\CandidateController@storeSituation')->name('storeSituation');

Route::get('/candidate/application/confirm', 'Candidate\CandidateController@confirmSendApplication')->name('confirmSendApplication');
Route::post('/candidate/application/send', 'Candidate\CandidateController@sendApplication')->name('sendApplication');

Route::group(['middleware'=>'admin'], function () {
  // Admin panel
  Route::get('/admin', 'Admin\AdminController@index')->name('admin');
  // Formateur
  Route::get('/admin/former/list', 'Admin\FormerController@list')->name('formerList');
  Route::get('/admin/former/create', 'Admin\FormerController@create')->name('formerCreate');
  Route::post('/admin/former/add', 'Admin\FormerController@add')->name('formerAdd');
  Route::get('/admin/former/show/{id}', 'Admin\FormerController@show')->name('formerShow');
  Route::get('/admin/former/edit/{id}', 'Admin\FormerController@edit')->name('formerEdit');
  Route::get('/admin/former/delete/{id}', 'Admin\FormerController@destroy')->name('formerDelete');
  Route::post('/admin/former/store', 'Admin\FormerController@store')->name('formerStore');
  Route::post('/admin/former/update/{id}', 'Admin\FormerController@update')->name('formerUpdate');
// Formation
  Route::get('/admin/formation/list', 'Admin\FormationController@list')->name('formationList');
  Route::get('/admin/formation/create', 'Admin\FormationController@formerCreate')->name('formationCreate');
  Route::post('/admin/formation/add', 'Admin\FormationController@add')->name('formationAdd');
  Route::get('/admin/formation/show/{id}', 'Admin\FormationController@show')->name('formationShow');
  Route::get('/admin/formation/edit/{id}', 'Admin\FormationController@edit')->name('formationEdit');
  Route::get('/admin/formation/delete/{id}', 'Admin\FormationController@destroy')->name('formationDelete');
  Route::post('/admin/formation/store', 'Admin\FormationController@store')->name('formationStore');
  Route::post('/admin/formation/update/{id}', 'Admin\FormationController@update')->name('formationUpdate');
}
);

Route::group(['middleware' => 'recruiter'], function () {
  Route::get('/recruiter', 'Recruiter\FormationController@recruiterIndex')->name('recruiterIndex');
  Route::get('/recruiter/formation/show/{id}', 'Recruiter\FormationController@recruiterFormationShow')->name('recruiterFormationShow');
  Route::get('/recruiter/formation/edit/{id}', 'Recruiter\FormationController@recruiterFormationEdit')->name('recruiterFormationEdit');
  Route::post('/recruiter/formation/update/{id}', 'Recruiter\FormationController@recruiterFormationUpdate')->name('recruiterFormationUpdate');
  Route::get('/recruiter/formation/candidates/show/{id}', 'Recruiter\CandidateController@recruiterFormationCandidatesShow')->name('recruiterFormationCandidatesShow');
  Route::get('/recruiter/formation/candidate/show/{id}', 'Recruiter\CandidateController@candidateFormationShow')->name('candidateFormationShow');
  Route::get('/recruiter/formation/candidate/edit/{id}', 'Recruiter\CandidateController@candidateFormationEdit')->name('candidateFormationEdit');
  Route::post('/recruiter/formation/candidate/update/{id}', 'Recruiter\CandidateController@candidateFormationUpdate')->name('candidateFormationUpdate');
  Route::get('/recruiter/formation/candidate/delete/{id}', 'Recruiter\CandidateController@candidateFormationDelete')->name('candidateFormationDelete');
});
