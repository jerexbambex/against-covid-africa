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
//     return view('welcome');
// });

// Route::get('/projects', 'ProjectController@index')->name('project');
// Route::get('/projects/{project}', 'ProjectController@show');
// Route::post('/projects', 'ProjectController@store');

// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/support', 'TypeformController@index')->name('support');
Route::get('/givesupport', 'TypeformController@giveSupport')->name('giveSupport');

Route::get('/showsupports', 'AirTableController@showSupports')->name('showSupports');
Route::get('/showinnovations', 'AirTableController@showInnovations')->name('showInnovations');


Route::resource('projects', 'ProjectController');