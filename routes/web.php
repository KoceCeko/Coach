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


Route::get('/trainers','TrainersController@index');

Route::get('/trainers/{trainer_id}','TrainersController@getSwimmers');

Route::get('/dateTest','PresenceController@testDate');

Route::get('/presences/{swimmer_id}','PresenceController@show');