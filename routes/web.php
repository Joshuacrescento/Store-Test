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
    return view('auth\login');
});
Route::get('/login', function () {
    return view('auth\login');
});
Auth::routes();
Route::get('/prod/create', 'PostsController@create');
Route::get('/p/create', 'CouponsController@create');
Route::post('/p', 'CouponsController@store');
Route::post('/prod', 'PostsController@store');
Route::get('/codes/{user}', 'CouponsController@show');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
