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
    return view('admin.pages.index');
});

Route::group(['prefix'=>'admin'],function(){
	Route::resource('news','NewsController');
	Route::resource('user','UserController');

});
Route::group(['prefix'=>'mail'],function(){
	Route::view('/','mail.home');
	Route::post('posts', 'PostController@store');
});
