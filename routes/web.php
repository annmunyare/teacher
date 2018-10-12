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
//     return view('index');
// });
Route::get('/',  'TeacherController@index');
Route::get('/teachers',  'TeacherController@index');
Route::get('/teachers/create',  'TeacherController@create');
Route::post('/teachers',  'TeacherController@store');
Route::post('/search',  'TeacherController@search');

//search


