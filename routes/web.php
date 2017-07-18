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





Route::get('/formCivil', 'FormCivilController@index');

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

Route::group(['middleware'=>'candidat'], function () {
  Route::get('/candidat', 'CandidateController@index')->name('candidat');
  Route::get('/candidat/create', 'CandidateController@create')->name('candidatCreate');
  Route::post('/candidat/create/post', 'CandidateControlle@store')->name('candidatAdd');
}
);

Route::group(['middleware'=>'formateur'], function () {
  Route::get('/listeCandidats', 'listeCandidatsController@getCandidats');
}
);
