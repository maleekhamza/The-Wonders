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
use Illuminate\Support\Facades\Route; 

Route::get('/', 'HomeController@welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/alphatech', function(){
    return view('alphatech');
});

Route::get('/voyage', function(){
    return view('voyage');
});

Route::get('/google', function(){
    return view('google');
});

