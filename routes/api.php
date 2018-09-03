<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('penilaian/simpan', 'PenilaianTugasController@simpan');
Route::post('presensi/simpan', 'PresensiController@simpan');
Route::post('kemampuan/simpan', 'PenilaianKemampuanController@simpan');
Route::post('star/simpan', 'DetailCalonAnggotaController@simpan');
Route::post('rekomendasi/simpan', 'RekapPenilaianController@simpan');
Route::post('hasilakhir/simpan', 'AdminHasilAkhirController@simpan');
Route::post('keterangan/simpan', 'RekapPenilaianController@ketSimpan');
Route::post('user/reset', 'AdminAkunController@reset');
Route::get('get/total/kehadiran/{id}', 'RekapPenilaianController@ketKehadiran');
Route::get('periode/setactive/{id}', 'AdminPeriodeController@changeActive');

Route::get('kegiatan/departemen/{id}', 'AdminController@filterDepartemen')->name('ajax.kegiatan.departemen');
Route::get('tugas/departemen/{id}', 'AdminController@tugasDepartemen')->name('ajax.tugas.departemen');
Route::get('tugas/deadline/{id}', 'AdminController@tugasDeadline');

Route::post('admin/hasilakhir/simpan', 'AdminHasilAkhirController@simpan');