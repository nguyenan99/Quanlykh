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

Route::get('/trangchu', 'PageController@index');


Route::group(['prefix'=>'/trangchu/danhsachkhoahoc'],function(){
	Route::get('/', 'KhoahocController@index');
	Route::get('/chitiet/{id}', 'KhoahocController@getChitietkhoahoc')->name('chitietkhoahoc');
	Route::get('/themkhoahoc', 'KhoahocController@themkhoahoc')->name('themkhoahoc');
	Route::get('/xoakhoahoc/{id}', 'KhoahocController@xoakhoahoc')->name('xoakhoahoc');
});