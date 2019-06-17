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

// Route::get('/', function () {
//     return view('homes');
// });
Route::get('/' , 'CreatesController@home');
Route::get('/create' , function(){
	return view('inc.create');
});
Route::post('/insert','CreatesController@add');
Route::get('/update/{id}','CreatesController@update');
Route::post('/edit/{id}','CreatesController@edit');
Route::get('/read/{id}','CreatesController@read');
//RegistrationForm Web Routing
Route::get('/delete/{id}','CreatesController@delete');

//Student Registration Details
/*
 Registration Form
*/
Route::get('/form' , function(){
	return view('inc.form');
});

Route::get('download', 'RegistrationController@download');
/*
 Listing Student Details
*/
Route::get('/list','RegistrationController@display');
/*
 Insert Form Details
*/
Route::post('/insertform','RegistrationController@store');
Route::get('/update/{id}','RegistrationController@update');
Route::post('/editform/{id}','RegistrationController@edit');
Route::get('/read/{id}','RegistrationController@read');
Route::get('/destroy/{id}','RegistrationController@delete');