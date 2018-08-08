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
    return view('welcome');
});
Route::resource('revista', 'RevistaController');
Route::resource('infobase', 'BaseController');
Route::resource('autor', 'AutorController');
Route::resource('tema', 'TemaController');

Route::get('autor/{id}', 'AutorController@create');
Route::get('Form1/{id}', 'Form1Controller@create');
Route::get('Form2/{id}', 'Form2Controller@create');
Route::get('Form3/{id}', 'Form3Controller@create');
Route::get('Form4/{id}', 'Form4Controller@create');
Route::get('Form5/{id}', 'Form5Controller@create');
Route::get('Form6/{id}', 'Form6Controller@create');
Route::get('Form7/{id}', 'Form7Controller@create');
Route::post('saveautor/{id}','AutorController@store');
Route::post('saveform1/{id}','Form1Controller@store');
Route::post('saveform2/{id}','Form2Controller@store');
Route::post('saveform3/{id}','Form3Controller@store');
Route::post('saveform4/{id}','Form4Controller@store');
Route::post('saveform5/{id}', 'Form5Controller@store');
Route::post('saveform6/{id}', 'Form6Controller@store');
Route::post('saveform7/{id}', 'Form7Controller@store');
Route::resource('Form2', 'Form2Controller');

Route::get('/getImport','ExcelController@getImport');
Route::post('/postImport','ExcelController@postImport');
Route::resource('inicio', 'ExcelController');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/respuesta/', function(){
	return view('respuesta');
});
Route::get('/pass/{code}', 'PassController@pass');
Route::post('/complete/{id}','PassController@guardar');

Route::get('/aceptar/{code}', 'PassController@aceptar');
Route::post('/si-no/{id}','PassController@save');