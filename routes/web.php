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
Route::put('/home/user/{user}', 'UserController@update')->name('user.update');
Route::get('/home/user/{user}', 'UserController@show')->name('user.show');
Route::delete('/home/user/{user}', 'UserController@destroy')->name('user.destroy');
Route::get('/home/user/{user}/edit', 'UserController@edit')->name('user.edit');
Route::resource('/home/post', 'PostController')->middleware('auth');


// *************//
Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('login-github');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback')->name('github-callback');



// *************//
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider2')->name('login-facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handelFacebookCallback')->name('facebook-callback');

Route::fallback(function () {
    return 'Hm, why did you land here somehow?';
});
