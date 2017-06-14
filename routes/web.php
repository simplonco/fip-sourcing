<?php



/*
----------------------------------------------------------------------
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
<<<<<<< HEAD
Route::get('/adminpanel', function () {
    return view('adminpanel');
});
Route::post('/ajouterFormateur', 'AdminController@ajoutFormateur')->name('ajouterFormateur');
=======


Route::group(['middleware'=>'admin'], function () {
	Route::get('/admin', 'AdminController@index')->name('admin');
}
);
>>>>>>> c9d5471e547bcbfeb21d6d1ee42d375f28f8d24d
