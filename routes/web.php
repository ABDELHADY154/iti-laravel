<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home/user', 'UserController')->except(['update', 'show', 'destroy', 'edit']);
Route::put('/home/user/{user}', 'UserController@update')->where('user', '\d')->name('user.update');
Route::get('/home/user/{user}', 'UserController@show')->where('user', '\d')->name('user.show');
Route::delete('/home/user/{user}', 'UserController@destroy')->where('user', '\d')->name('user.destroy');
Route::get('/home/user/{user}/edit', 'UserController@edit')->where('user', '\d')->name('user.edit');


Route::fallback(function () {
    return 'Hm, why did you land here somehow?';
});
