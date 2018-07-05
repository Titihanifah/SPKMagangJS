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
Route::resource('/tugas','TugasController');
Route::resource('/admin/datacalon','AdminDataCalonController');
Route::post('/admin/upload/datacalon','AdminDataCalonController@importExcel')->name('datacalon.importexcel');
Route::resource('/admin/kriteria','AdminKriteriaController');
Route::resource('/admin/periode','AdminPeriodeController');
Route::resource('/admin/departemen','AdminDepartemenController');
Route::resource('/admin/akun','AdminAkunController');
Route::resource('/admin/kemampuan-tambahan','AdminSkillController');
Route::resource('/admin/hasil','AdminHasilAkhirController');
Route::resource('/admin/kemampuan','AdminKemampuanTambahan');

Route::get('/penilaianTugas','TugasController@penilaianTugas')->name('penilaianTugas');
//Route::post('/penilaianTugas','TugasController@penilaianTugasStore');
Route::get('/presensi','PresensiController@index')->name('presensi');
Route::get('/rekap_presensi','PresensiController@rekap')->name('rekap');
Route::get('/rekap_nilai','RekapPenilaianController@index');
Route::get('/kemampuan_tambahan','PenilaianKemampuanController@index');
Route::get('/kegiatan/destroy/{id}','KegiatanController@destroy');
Route::get('admin/periode/destroy/{id}', 'AdminPeriodeController@destroy');
Route::get('admin/kriteria/destroy/{id}', 'AdminKriteriaController@destroy');
Route::get('/admin/datacalon/destroy/{id}','AdminDataCalonController@destroy');
Route::get('/admin/departemen/destroy/{id}','AdminDepartemenController@destroy');
Route::get('/tugas/destroy/{id}','TugasController@destroy');
Route::get('/admin/akun/destroy/{id}','AdminAkunController@destroy');
Route::get('/admin/kegiatan','AdminController@kegiatan');
Route::get('/admin/tugas','AdminController@tugas');
Route::get('/admin/kemampuan/destroy/{id}','AdminKemampuanTambahan@destroy');


// Route::get('/dashboard','PresensiController@dashboard');

Route::get('nilaiakhir', function()
{
    return View::make('bkk/hasilAkhir/index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
