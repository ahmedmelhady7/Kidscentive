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
Route::post('/register',array('uses'=>'AuthController@postRegister'))->before('csrf');
Route::get('/signout',array('uses'=>'AuthController@signout'));
Route::get('/addtask',array('as'=>'addtask','uses'=>'AuthController@getAddTask'))->before('auth');
Route::post('/addtask',array('uses'=>'AuthController@postAddTask'))->before('auth');
Route::get('/edittask',array('as'=>'edittask','uses'=>'AuthController@getEditTask'))->before('auth');
Route::post('/edittask',array('uses'=>'AuthController@postEditTask'))->before('auth');
Route::get('/tasks',array('as'=>'tasks.index','uses'=>'TasksController@index'))->before('auth');
Route::get('/tasks/create',array('as'=>'tasks.create','uses'=>'TasksController@create'))->before('auth');
Route::get('/tasks/show/{id}',array('as'=>'tasks.show','uses'=>'TasksController@show'))->before('auth');
Route::get('/tasks/edit/{id}',array('as'=>'tasks.edit','uses'=>'TasksController@edit'))->before('auth');
Route::delete('/tasks/destroy/{id}',array('as'=>'tasks.destroy','uses'=>'TasksController@destroy'))->before('auth');
Route::post('tasks/store/{id}',array('as'=>'tasks.store','uses'=>'TasksController@store'))->before('auth');
Route::post('tasks/update/{id}',array('as'=>'tasks.update','uses'=>'TasksController@update'))->before('auth');
Route::post('tasks/approve/{id}',array('as'=>'tasks.approve','uses'=>'TasksController@approve'))->before('auth');
Route::get('/parents/edit',array('as'=>'parents.edit','uses'=>'AuthController@getEditProfile'))->before('auth');
Route::post('/parents/edit',array('as'=>'parents.update','uses'=>'AuthController@postEditProfile'))->before('auth');
Route::get('/kids',array('as'=>'kids.index','uses'=>'KidsController@index'))->before('auth');
Route::get('/kids/create',array('as'=>'kids.create','uses'=>'KidsController@create'))->before('auth');
Route::get('/kids/show/{id}',array('as'=>'kids.show','uses'=>'KidsController@show'))->before('auth');
Route::get('/kids/edit/{id}',array('as'=>'kids.edit','uses'=>'KidsController@edit'))->before('auth');
Route::delete('/kids/destroy',array('as'=>'kids.destroy','uses'=>'KidsController@destroy'))->before('auth');
Route::post('Kids/store/{id}',array('as'=>'kids.store','uses'=>'KidsController@store'))->before('auth');
Route::post('Kids/update/{id}',array('as'=>'kids.update','uses'=>'KidsController@update'))->before('auth');

