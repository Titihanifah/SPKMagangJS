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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/datacalon','DataCalonController');
Route::resource('/kegiatan','KegiatanController');
Route::get('/tugas','TugasController@index');
Route::get('/penilaianTugas','TugasController@penilaianTugas');
Route::get('/presensi','PresensiController@index')->name('presensi');
Route::get('/rekap_presensi','PresensiController@rekap')->name('rekap');
Route::get('/rekap_nilai','RekapPenilaianController@index');
Route::get('/penilaian_skill','PenilaianKemampuan@index');
Route::resource('/admin/datacalon','AdminDataCalonController');
Route::resource('/admin/kriteria','AdminKriteriaController');
Route::resource('/admin/periode','AdminPeriodeController');
Route::resource('/admin/departemen','AdminDepartemenController');
Route::resource('/admin/akun','AdminAkunController');

// Route::get('/dashboard','PresensiController@dashboard');

Route::get('nilaiakhir', function()
{
    return View::make('bkk/hasilAkhir/index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
