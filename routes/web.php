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
//     return view('');
// });
Route::resource('/', 'CharacterController');
Route::resource('/sam', 'FilmsController');
Route::get('list', function()
{
return View::make('list');
});
Route::get('/getdata','CharacterController@getcharacter');
Route::get('/getdata1','FilmsController@getfilms');
Route::post('/store', 'CharacterController@store');
Route::post('/store1', 'FilmsController@store');



