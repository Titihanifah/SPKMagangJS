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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/datacalon','DataCalonController');
Route::get('/kegiatan','KegiatanController@index');
Route::get('/tugas','TugasController@index');
Route::get('/penilaianTugas','TugasController@penilaianTugas');
Route::get('/presensi','PresensiController@index')->name('presensi');
Route::get('/rekap_presensi','PresensiController@rekap')->name('rekap');
Route::get('/rekap_nilai','RekapPenilaianController@index');
Route::resource('/admin/datacalon','AdminDataCalonController');
Route::resource('/admin/kriteria','AdminKriteriaController');
Route::resource('/admin/periode','AdminPeriodeController');
Route::resource('/admin/departemen','AdminDepartemenController');
// Route::get('/dashboard','PresensiController@dashboard');