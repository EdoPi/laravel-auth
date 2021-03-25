<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();



Route::get('/houses', 'PublicController@index')->name('houses.index');
Route::get('/houses/{house}', 'PublicController@show')->name('houses.show');

Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
    Route::resource('/houses', HouseController::class);
});

Route::get('/home', 'HomeController@index')->name('home');
