<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PainelController@index');
Route::get('painel', 'PainelController@index');

Route::model('tasks', 'Task');
Route::model('projects', 'Project');

Route::bind('tasks', function($value, $route){

  return App\Task::whereId($value)->first();

});
Route::bind('projects', function($value, $route){

  return App\Project::whereId($value)->first();

});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');

