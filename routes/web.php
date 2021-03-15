<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/news/{id}', 'NewsController@index')
    ->name('news');


Route::prefix('pages/pwk/uir/admin')
    ->namespace('Admin')
    // ->Middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('statistic', 'StatisticController');
        Route::resource('newses', 'NewsController');
        Route::resource('galleries', 'GalleriesController');
        Route::resource('videos', 'VideoController');
        Route::resource('teachers', 'TeacherController');
    });


// About
Route::prefix('about')
    ->namespace('About')
    ->group(function () {

        Route::resource('sejarah', 'SejarahController');
        Route::resource('visimisi', 'VisimisiController');
        Route::resource('kajian', 'KajianController');
        Route::resource('tujuan', 'TujuanController');
    });
// End About

// Academy
Route::prefix('academy')
    ->namespace('Academy')
    ->group(function () {
        Route::resource('curriculum', 'CurriculumController');
        Route::resource('lecturer', 'LecturerController');
        Route::resource('structure', 'StructureController');
    });
// End Academy

Auth::routes(['verify' => true, 'register' => true]);
