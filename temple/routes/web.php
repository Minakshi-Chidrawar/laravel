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

Route::get('/', 'TempleController@index');
Route::get('/home', ['as' => 'home', 'uses' => 'TempleController@index']);
// Route::get('/aboutMataji', 'TempleController@aboutMataji');
Route::get('/aboutTemple', ['as' => 'aboutTemple', 'uses' => 'TempleController@aboutTemple']);
Route::get('/mission', ['as' => 'mission', 'uses' => 'TempleController@mission']);
Route::get('/horoscope', ['as' => 'horoscope', 'uses' => 'TempleController@horoscope']);
Route::get('/donation', ['as' => 'donation', 'uses' => 'TempleController@donation']);
Route::get('/aarati', ['as' => 'aarati', 'uses' => 'TempleController@aarati']);
Route::get('/gayatriMantra', ['as' => 'gayatriMantra', 'uses' => 'TempleController@gayatriMantra']);
Route::get('/mataji', ['as' => 'mataji', 'uses' => 'TempleController@mataji']);
Route::get('/hanumanChalisa', ['as' => 'hanumanChalisa', 'uses' => 'TempleController@hanumanChalisa']);
Route::get('/inTempleActivities', ['as' => 'inTempleActivities', 'uses' => 'TempleController@inTempleActivities']);
Route::get('/outTempleActivities', ['as' => 'outTempleActivities', 'uses' => 'TempleController@outTempleActivities']);
Route::get('/easyFundRaising', ['as' => 'easyFundRaising', 'uses' => 'TempleController@easyFundRaising']);
Route::get('/templeExtension', ['as' => 'templeExtension', 'uses' => 'TempleController@templeExtension']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'TempleController@create']);
Route::post('/contact', ['as' => 'contact.store', 'uses' => 'TempleController@store']);