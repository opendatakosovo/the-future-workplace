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

Route::get('workforce-map', 'WorkForceMapController@index');

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

Route::get('graduating_per_ict_dep_each_university','WorkForceMapController@grad_per_ict_dep_each_university');

Route::get('grad_students_per_skill_area','WorkForceMapController@grad_students_per_skill_area');

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
    Route::get('/admin/uni-settings', 'Admin\UniSettingsController@index');

    Route::post('/admin/uni-settings/store_university', 'Admin\UniSettingsController@store_university');
    Route::post('/admin/uni-settings/destroy_university', 'Admin\UniSettingsController@destroy_university');
    Route::post('/admin/uni-settings/edit_university', 'Admin\UniSettingsController@edit_university');

    Route::post('/admin/uni-settings/store_skill', 'Admin\UniSettingsController@store_skill');
    Route::post('/admin/uni-settings/destroy_skill', 'Admin\UniSettingsController@destroy_skill');
    Route::post('/admin/uni-settings/edit_skill', 'Admin\UniSettingsController@edit_skill');

    Route::post('/admin/uni-settings/store_degree', 'Admin\UniSettingsController@store_degree');
    Route::post('/admin/uni-settings/destroy_degree', 'Admin\UniSettingsController@destroy_degree');
    Route::post('/admin/uni-settings/edit_degree', 'Admin\UniSettingsController@edit_degree');


    Route::post('/admin/uni-settings/import-graduates', 'Admin\UniSettingsController@import_graduates');

    Route::post('/admin/uni-settings/fetch_graduates', 'Admin\UniSettingsController@fetch_graduates');



    Route::post('/admin/uni-settings/store_graduate', 'Admin\UniSettingsController@store_graduate');
    Route::post('/admin/uni-settings/edit_graduate', 'Admin\UniSettingsController@edit_graduate');
    Route::post('/admin/uni-settings/destroy_graduate', 'Admin\UniSettingsController@destroy_graduate');

});











