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
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/api/cats', 'CatsController@getallcats');
Route::get('/api/cats/{id}', 'CatsController@getsinglecat');
Route::post('/api/cats', 'CatsController@addcats');
Route::put('/api/cats/{id}', 'CatsController@updatesinglecat');
Route::delete('/api/cats/{id}', 'CatsController@deletesinglecat');
