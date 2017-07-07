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
  Route::get('/admin', 'AdminController@index')->name('admin');
  Route::get('/admin/former/list', 'FormerController@list')->name('formerList');
  Route::get('/admin/former/create', 'FormerController@formerCreate')->name('formerCreate');
  Route::post('/admin/former/add', 'FormerController@add')->name('formerAdd');
  Route::get('/admin/former/show/{id}', 'FormerController@show')->name('formerShow');
  Route::get('/admin/former/update', 'FormerController@update')->name('formerUpdate');
  Route::get('/admin/former/delete/{id}', 'FormerController@destroy')->name('formerDelete');
  Route::post('/admin/former/store', 'FormerController@store')->name('formerStore');
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
