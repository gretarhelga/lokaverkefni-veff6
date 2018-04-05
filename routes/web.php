<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("threads", "ThreadsController@index");
Route::get("threads/create", "ThreadsController@create");
Route::get("threads/{chennel}/{thread}", "ThreadsController@show");
Route::post("threads", "ThreadsController@store");
Route::get("threads/{channel}", "ThreadsController@index");
Route::post("/threads/{channel}/{thread}/replies", "RepliesController@store");
Route::post("/replies/{reply}/favorites", "FavoritesController@store");



//kominn a þatt 19 min 5:36



