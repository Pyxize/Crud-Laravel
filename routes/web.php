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
    return view('home');

});

Route::get('/', 'ProductController@home');
Route::get('/create', function (){
   return view('create');
});

Route::post('/insert', 'ProductController@add');
Route::get('/update/{id}', 'ProductController@update');
Route::post('/edit/{id}', 'ProductController@edit');
Route::get('/read/{id}', 'ProductController@read');
Route::get('/delete/{id}', 'ProductController@delete');


// connection //

Route::group(['prefix' => 'admin'], function (){
   Route::resource('/', 'ConnectController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});