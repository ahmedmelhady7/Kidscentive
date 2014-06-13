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
 Route::get('/', function()
 {
 return View::make('hello');
 });
 */
Route::get('/',array('as'=>'home','uses'=>'HomeController@getIndex'))->before('auth');
Route::get('/login',array('as'=>'login','uses'=>'AuthController@getLogin'))->before('guest');
Route::post('/login',array('uses'=>'AuthController@postLogin'))->before('csrf');
Route::get('/register',array('as'=>'register','uses'=>'AuthController@getRegister'));
Route::post('/register',array('uses'=>'AuthController@postRegister'));
Route::get('/signout',array('uses'=>'AuthController@signout'));
Route::get('/addtask',array('as'=>'addtask','uses'=>'AuthController@getAddTask'))->before('auth');
Route::post('/addtask',array('uses'=>'AuthController@postAddTask'))->before('auth');