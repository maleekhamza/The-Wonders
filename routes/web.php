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

Route::get('/', 'HomeController@welcome');
   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/IEEE',  function ()
{
    return view('IEEE');
} );
Route::get('/lifeclub',  function ()
{
    return view('lifeclub');
} );
Route::get('/weseek',  function ()
{
    return view('weseek');
} );

=======
Route::get('/welcome',function (){
    return view('welcome');
});
Route::get('/IsetEvents',function (){
    return view('IsetEvents');
});
Route::get('/TunivisionHome',function (){
    return view('TunivisionHome');
});
Route::get('/ShrysHome',function (){
    return view('ShrysHome');
});
Route::get('/admin',function (){
    return view('admin\dashboard');
});
>>>>>>> 6ab70f8e89384e36465e4a44d883059b688d8b7c
