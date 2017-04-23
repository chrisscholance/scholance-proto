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

Route::get('/', 'HomeController@index');

//This covers the registration and login routes
Auth::routes();

Route::get('dashboard', 'DashboardController@show')->middleware('auth')->name('dashboard');

/**********
 * PROJECTS
 **********/
Route::get('projects', 'ProjectController@index')->name('projects');

/****************************
 * Business Project Routes
 ****************************/
Route::get('project/create', 'ProjectController@create')->middleware('auth')->name('project.create');
Route::post('project/store/{project?}', 'ProjectController@store')->middleware('auth')->name('project.store');
Route::any('project/show/{project}', 'ProjectController@show')->middleware('auth')->name('project.show');
Route::any('project/{project}/edit', 'ProjectController@edit')->middleware('auth')->name('project.edit');
Route::put('project/{project}', 'ProjectController@update')->middleware('auth')->name('project.update');
Route::delete('project/{project}', 'ProjectController@delete')->middleware('auth')->name('project.delete');