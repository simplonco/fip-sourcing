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

// Candidate routes
Route::get('/candidate/formation', 'CandidateController@chooseFormation')->name('chooseFormation');
Route::get('/candidate/formation/store/{id}', 'CandidateController@storeFormation')->name('storeFormation');
Route::get('/candidate/hero/choose', 'CandidateController@chooseHero')->name('chooseHero');
Route::post('/candidate/hero/store', 'CandidateController@storeHero')->name('storeHero');
Route::get('/candidate/hack/choose', 'CandidateController@chooseHack')->name('chooseHack');
Route::post('/candidate/hack/store', 'CandidateController@storeHack')->name('storeHack');
Route::get('/candidate/course/choose', 'CandidateController@chooseCourse')->name('chooseCourse');
Route::post('/candidate/course/store', 'CandidateController@storeCourse')->name('storeCourse');
Route::get('/candidate/superpower/choose', 'CandidateController@chooseSuperpower')->name('chooseSuperpower');
Route::post('/candidate/superpower/store', 'CandidateController@storeSuperpower')->name('storeSuperpower');
Route::get('/candidate/motivation/choose', 'CandidateController@chooseMotivation')->name('chooseMotivation');
Route::post('/candidate/motivation/store', 'CandidateController@storeMotivation')->name('storeMotivation');
Route::get('/candidate/profile/choose', 'CandidateController@chooseProfile')->name('chooseProfile');
Route::post('/candidate/profile/store', 'CandidateController@storeProfile')->name('storeProfile');
Route::get('/candidate/civil/choose', 'CandidateController@chooseCivil')->name('chooseCivil');
Route::post('/candidate/civil/store', 'CandidateController@storeCivil')->name('storeCivil');

Route::group(['middleware'=>'admin'], function () {
  // Admin panel
  Route::get('/admin', 'AdminController@index')->name('admin');
  // Formateur
  Route::get('/admin/former/list', 'FormerController@list')->name('formerList');
  Route::get('/admin/former/create', 'FormerController@create')->name('formerCreate');
  Route::post('/admin/former/add', 'FormerController@add')->name('formerAdd');
  Route::get('/admin/former/show/{id}', 'FormerController@show')->name('formerShow');
  Route::get('/admin/former/edit/{id}', 'FormerController@edit')->name('formerEdit');
  Route::get('/admin/former/delete/{id}', 'FormerController@destroy')->name('formerDelete');
  Route::post('/admin/former/store', 'FormerController@store')->name('formerStore');
  Route::post('/admin/former/update/{id}', 'FormerController@update')->name('formerUpdate');
// Formation
  Route::get('/admin/formation/list', 'FormationController@list')->name('formationList');
  Route::get('/admin/formation/create', 'FormationController@formerCreate')->name('formationCreate');
  Route::post('/admin/formation/add', 'FormationController@add')->name('formationAdd');
  Route::get('/admin/formation/show/{id}', 'FormationController@show')->name('formationShow');
  Route::get('/admin/formation/edit/{id}', 'FormationController@edit')->name('formationEdit');
  Route::get('/admin/formation/delete/{id}', 'FormationController@destroy')->name('formationDelete');
  Route::post('/admin/formation/store', 'FormationController@store')->name('formationStore');
  Route::post('/admin/formation/update/{id}', 'FormationController@update')->name('formationUpdate');
}
);
