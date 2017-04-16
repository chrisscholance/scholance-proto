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


Route::get('project/create', 'ProjectController@create')->middleware('auth')->name('project.create');
Route::post('project/store', 'ProjectController@store')->middleware('auth')->name('project.store');
Route::any('project/show/{project}', 'ProjectController@show')->middleware('auth')->name('project.show');