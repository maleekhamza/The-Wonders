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

<<<<<<< HEAD
Route::get('/', 'HomeController@welcome' ); 
    
=======
Route::get('/', 'HomeController@welcome');
   
>>>>>>> 64f66bdaa00a0adcc2ba66b9fee14d334c37cc6c

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
