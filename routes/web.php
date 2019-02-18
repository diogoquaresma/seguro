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
Route::get('/clients', 'ClientsController@list');
Route::get('/clientcreation', 'ClientsController@create');
Route::get('/edit/{id}', 'ClientsController@edit');
Route::post('/update', 'ClientsController@update');
Route::get('/destroy/{id}', 'ClientsController@destroy');
Route::post('/clientcreated', 'ClientsController@store');
Route::get('/about', function () {
    return view('about');
});


Route::get('/test', function () {
    return view('test');
});
