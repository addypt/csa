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

Route::get('/', 'CsaHomeController@index') ;

Auth::routes();

Route::get('/home', 'CsaHomeController@index') ;
Route::get('/csa', 'CsaHomeController@index');
Route::get('/dashboard', 'DashboardController@index');

Route::post('/event/create', 'EventController@store');
Route::post('/event/check', 'EventController@check');
Route::post('/events', 'EventController@index');
Route::get('/events', 'EventController@index');

Route::post('/events/{user}', 'EventController@userEvents');
Route::get('/events/{user}', 'EventController@userEvents');
Route::get('/event/{event}', 'EventController@show');

Route::get('/event/check', 'EventController@check');
Route::post('/event/check', 'EventController@check');