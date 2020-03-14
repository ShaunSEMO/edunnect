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


/*
-----------------------
| Universal Dashboard |
-----------------------
| Development Credenetials
| username: tshegofatsosemenya@gmail.com
| pass: m3zum0_130y
-----------------------
*/


Route::get('/_3dunn3ct_@dm!n_p@n3l_', 'DashboardController@index')->name('dashboard');

        // ABOUT
   Route::get('/_3dunn3ct_@dm!n_p@n3l_/about', 'DashboardController@about')->name('dashboardAbout');
   Route::put('/_3dunn3ct_@dm!n_p@n3l_/about/{about}', 'DashboardController@updateAbout')->name('updateAbout');
   Route::put('/_3dunn3ct_@dm!n_p@n3l_/values/{value}', 'DashboardController@updateValue')->name('updateValue');
   Route::put('/_3dunn3ct_@dm!n_p@n3l_/stats/{stat}', 'DashboardController@updateStat')->name('updateStat');
   
        // TEAM
   Route::get('/_3dunn3ct_@dm!n_p@n3l_/team', 'DashboardController@team')->name('dashboardTeam');
   Route::get('/_3dunn3ct_@dm!n_p@n3l_/team/add', 'DashboardController@addMember')->name('addMember');
   Route::post('/_3dunn3ct_@dm!n_p@n3l_/team/save', 'DashboardController@saveMember')->name('saveMember');
   Route::get('/_3dunn3ct_@dm!n_p@n3l_/team/{member}/edit', 'DashboardController@editMember')->name('editMember');
   Route::put('/_3dunn3ct_@dm!n_p@n3l_/team/{member}/update', 'DashboardController@updateMember')->name('updateMember');
   Route::delete('/_3dunn3ct_@dm!n_p@n3l_/team/{member}/delete', 'DashboardController@deleteMember')->name('deleteMember');

        // SCHOOLS
   Route::get('/_3dunn3ct_@dm!n_p@n3l_/schools', 'DashboardController@schools')->name('dashboardSchools');
   Route::get('/_3dunn3ct_@dm!n_p@n3l_/schools/add', 'DashboardController@addSchool')->name('addSchool');
   Route::post('/_3dunn3ct_@dm!n_p@n3l_/schools/save', 'DashboardController@saveSchool')->name('saveSchool');
   Route::post('/_3dunn3ct_@dm!n_p@n3l_/schools/save_overview', 'DashboardController@saveSchoolOverviews')->name('saveSchoolOverviews');
   Route::get('/_3dunn3ct_@dm!n_p@n3l_/schools/{school}/edit', 'DashboardController@editSchool')->name('editSchool');
   Route::put('/_3dunn3ct_@dm!n_p@n3l_/schools/{school}/update', 'DashboardController@updateSchool')->name('updateSchool');
   Route::put('/_3dunn3ct_@dm!n_p@n3l_/schools/{schoolOverviews}/update', 'DashboardController@updateSchoolOverviews')->name('updateSchoolOverviews');
   Route::delete('/_3dunn3ct_@dm!n_p@n3l_/schools/{school}/delete', 'DashboardController@deleteSchool')->name('deleteSchool');
   

Auth::routes();
