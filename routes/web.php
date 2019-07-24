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

Route::get('home', 'HomeController@index');

Route::get('work_force_map', 'WorkForceMapController@index');

Route::get('inst_map', 'InstMapController@index');

Route::get('business_map', 'BusinessMapController@index');

Route::get('blog', 'BlogController@index');

Route::get('roadmap', 'RoadMapController@index');

Route::get('stats', 'StatsController@index');

