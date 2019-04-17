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