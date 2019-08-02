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

Route::get('work-force-map', 'WorkForceMapController@index');

Route::get('inst-map', 'InstMapController@index');

Route::get('business-map', 'BusinessMapController@index');

Route::get('blog', 'BlogController@index');

Route::get('roadmap', 'RoadMapController@index');

Route::get('stats', 'StatsController@index');

Route::get('apcu_stats', 'CacheController@index');


Route::get('get_business_data', 'BusinessMapController@fetch_data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/admin/home', 'AdminController@index');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/admin/inst_map', 'Admin\InstMapController@index');

Route::get('/admin/business_map', 'Admin\BusinessController@index');

Route::get('/admin/work_force_map', 'Admin\WorkForceMapController@index');

Route::get('/admin/stats', 'Admin\StatsController@index');

Route::get('/admin/blog', 'Admin\BlogController@index');










