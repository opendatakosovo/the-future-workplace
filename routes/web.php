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

Route::get('workforce-map', 'WorkForceDataController@index');

Route::get('inst-map', 'InstMapController@index');

Route::get('business-map', 'BusinessMapController@index');

Route::get('blog', 'BlogController@index');

Route::get('roadmap', 'RoadMapController@index');

Route::get('stats', 'SkillsMismatchController@index');

Route::get('company-data', 'BusinessMapController@index');

Route::get('employee-data', 'EmployeeDataController@index');

//Route::get('apcu_stats', 'CacheController@index');


Route::get('get_business_data', 'BusinessMapController@fetch_data');
Route::get('get_workforce_data', 'WorkForceDataController@fetch_data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');


Route::group(['middleware' => 'auth'], function(){

    Route::get('/admin/edit-profile', 'AdminController@update_user');
    Route::get('/admin/home', 'AdminController@index');

    Route::get('logout', 'Auth\LoginController@logout');

    Route::get('/admin/inst_map', 'Admin\InstMapController@index');

    Route::get('/admin/business_data', 'Admin\BusinessDataController@index');

    Route::get('/admin/workforce_data', 'Admin\WorkForceDataController@index');

    Route::get('/admin/skills_mismatch', 'Admin\SkillsMismatchController@index');

    Route::get('/admin/blog', 'Admin\BlogController@index');

    Route::get('/admin/user-management', 'Admin\UsersController@index');

    Route::get('/admin/navigation', 'Admin\SettingsController@navigation');
});











