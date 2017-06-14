<?php


/*
------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
}
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'], function () {
	Route::get('/admin', 'AdminController@index')->name('admin');
}
);

Route::group(['middleware'=>'candidat'], function () {
	Route::get('/candidat', 'CandidateController@index')->name('candidat');
}
);

Route::group(['middleware'=>'formateur'], function () {
	Route::get('/formateur', 'TeacherController@index')->name('formateur');
}
);
