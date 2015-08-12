<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});

Route::get('/', function(){
//	return "All cats are here.";
	return Redirect::to('cats');
});


Route::get('cats', function(){
	return "You are being redirected to cats here.";
});

Route::get('cats/{id}', function($id){
	return "Cat id is $id";
}) -> where('id', '[0-9]+');


Route::get('about', function(){
	return View::make('about') ->with('number_of_cats', 8888);
});