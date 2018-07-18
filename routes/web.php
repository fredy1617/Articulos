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

Route::resource('Form1', 'Form1Controller');
Route::resource('Form2', 'Form2Controller');
Route::resource('Form3', 'Form3Controller');
Route::resource('Form4', 'Form4Controller');
Route::resource('Form5', 'Form5Controller');
Route::resource('Form6', 'Form6Controller');
Route::resource('app', 'AppController');

Route::get('/getImport','ExcelController@getImport');
Route::post('/postImport','ExcelController@postImport');
Route::resource('inicio', 'ExcelController');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
