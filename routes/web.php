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

Route::get('/news/{slug}', 'NewsController@index')
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
        Route::resource('sliders', 'SliderController');
        Route::resource('kurikulums', 'KurikulumController');
        Route::resource('strukturs', 'StrukturController');
        Route::resource('graduations', 'GraduationController');
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
Route::prefix('akademik')
    // ->namespace('Akademik')
    ->group(function () {
        // Route::get('/', 'KurikulumController@index')
        //     ->name('kurikulum');
        Route::resource('kurikulum', 'KurikulumController');
        Route::resource('rps', 'RpsController');
        Route::resource('sap', 'SapController');
    });
// End Academy

// Dosen
Route::prefix('dosen')
    ->namespace('Dosen')
    ->group(function () {
        Route::resource('dosen', 'LecturerController');
        Route::resource('struktur', 'StructureController');
    });
// End Dosen

// Alumni
Route::prefix('alumni')
    ->group(function () {
        // Route::get('/', 'PhotoAlumniController@index')
        //     ->name('photo');
        Route::resource('photo', 'PhotoAlumniController');
    });
// End Alumni

// Penelitian & Inovasi
Route::prefix('penelitian-inovasi')
    ->group(function () {
        // Route::resource('')
    });
// End Penelitian & Inovasi

// Kegiatan Mahasiswa
Route::prefix('kegiatan-mahasiswa')
    ->group(function () {
        Route::resource('mahasiswa', 'MahasiswaController');
        Route::resource('himpunan', 'HimpunanController');
    });
// End Kegiatan Mahasiswa

// Kegiatan Mahasiswa
Route::prefix('penelitian-inovasi')
    ->group(function () {
        Route::resource('jurnal', 'JurnalistikController');
        // Route::resource('himpunan', 'HimpunanController');
    });
// End Kegiatan Mahasiswa

Auth::routes(['verify' => true, 'register' => false]);
