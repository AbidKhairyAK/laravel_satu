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

route::prefix('article')->group(function () {
	route::get('/','ArticleController@index');
	route::get('create','ArticleController@create');
	route::post('create','ArticleController@insert');
	route::get('edit/{id}','ArticleController@edit');
	route::post('edit','ArticleController@update');
	route::get('show/{id}','ArticleController@show');
	route::get('delete/{id}','ArticleController@delete');
});
