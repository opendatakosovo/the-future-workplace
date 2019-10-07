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

use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;
Route::get('/', function () {
    return view('welcome');
});



Route::get('home', 'HomeController@index');

Route::get('stats', 'StatsController@index');

Route::get('workforce-map', 'WorkForceMapController@index');

Route::get('inst-map', 'InstMapController@index');

Route::get('business-map', 'BusinessMapController@index');

Route::get('blog', 'BlogController@index');

Route::get('roadmap', 'RoadMapController@index');

Route::get('skills-mismatch', 'SkillsMismatchController@index');
Route::get('get_mismatch_data', 'SkillsMismatchController@fetch_data');

Route::get('company-data', 'BusinessMapController@index');
Route::get('atk-data', 'AtkDataController@index');
Route::get('get_number_atk_categories', 'AtkDataController@fetch_data');

Route::get('get_number_atk_employees', 'AtkDataController@fetch_data2');


Route::get('employee-data', 'EmployeeDataController@index');

Route::get('about', 'AboutController@index');

Route::get('downloads', 'DownloadsController@index');

Route::get('download_content', 'DownloadsController@download_content');
//Route::get('apcu_stats', 'CacheController@index');


Route::get('highschool-data', 'HighSchoolController@index');


Route::get('grads_ict', 'StatsController@grads_ict');
Route::get('number_businnesses', 'StatsController@number_businnesses');

Route::get('get_business_data', 'BusinessMapController@fetch_data');
Route::get('get_workforce_data', 'WorkForceDataController@fetch_data');

Route::get('graduating_per_ict_dep_each_university','WorkForceMapController@grad_per_ict_dep_each_university');

Route::get('grad_students_per_skill_area','WorkForceMapController@grad_students_per_skill_area');
Route::get('get_ict_per_year','WorkForceMapController@get_ict_per_year');
Route::get('get_aggregate_supply','WorkForceMapController@get_aggregate_supply');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');


Route::group(['middleware' => 'auth'], function(){


    Route::get('/admin/edit-profile', 'AdminController@update_user');
    Route::get('/admin/home', 'AdminController@index');

    Route::get('/admin/visitors_and_page_views', 'AdminController@visitors_and_page_views');

    Route::get('/admin/test-data', 'AdminController@test_analytics');

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


    Route::post('/admin/business-data/fetch_data', 'Admin\BusinessDataController@fetch_data');
    Route::post('/admin/business-data/fetch_data2', 'Admin\BusinessDataController@fetch_data2');
    Route::post('/admin/business-data/add_survey', 'Admin\BusinessDataController@add_survey');
    Route::post('/admin/business-data/import_businesses', 'Admin\BusinessDataController@import_businesses');
    Route::post('/admin/business-data/destroy_business', 'Admin\BusinessDataController@destroy_business');
    Route::post('/admin/business-data/destroy_survey', 'Admin\BusinessDataController@destroy_survey');
    Route::get('/admin/about', 'Admin\AboutController@index');
    Route::post('/admin/about_us/store', 'Admin\AboutController@store');

    //ATK

    Route::get('/admin/atk-data', 'Admin\AtkController@index');
    Route::get('/admin/atk-data/fetch_data', 'Admin\AtkController@fetch_data');
    Route::post('/admin/atk-data/destroy_data', 'Admin\AtkController@destroy_data');
    Route::post('/admin/atk-data/import_data', 'Admin\AtkController@import_data');

    //High School

    Route::get('/admin/highschool-data', 'Admin\HighSchoolDataController@index');
    Route::get('/admin/highschool-data/fetch_data', 'Admin\HighSchoolDataController@fetch_data');
    Route::post('/admin/highschool-data/destroy_data', 'Admin\HighSchoolDataController@destroy_data');
    Route::post('/admin/highschool-data/import_data', 'Admin\HighSchoolDataController@import_data');

});











