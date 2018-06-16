<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/cv', function () {
    return view('etudiant/create');
});
Route::get('/success', function () {
    return view('success');
});
Route::get('profile','UserController@index');

Route::patch('profile/{id}', 'UserController@update');
Route::post('/profile/update_avatar','UserController@updateAvatar');
Auth::routes();

Route::get('/home', 'monCvController@index');
//Route::get('/myCv', 'monCvController@index');
Route::get('index','creatCv@index');
Route::get('/home/store','creatCv@store');
Route::get('/home/create','creatCv@create');
Route::get('formation','formation@index');
Route::get('/formation/store','formation@store');
Route::get('experPro','experiencePro@index');
Route::get('experPro/store','experiencePro@store');
Route::get('lang/store','LangueController@store');
Route::get('langue','langues@index');
Route::get('langue/store','langues@store');
//Route::get('myCv/{id}','monCvController@index');
//Route::post('uplode','UplodeController@uploade');
Route::get('showcv{id}','showCvController@index');
//Route::get('mycv','thisMycvController@index');
Route::get('suppFomration{id}','formation@destroy');