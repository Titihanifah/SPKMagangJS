<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailCalonAnggota extends Model
{
    public function departemen()
    {
        return $this->belongsTo('App\Departemen','id_departemen');
    }
    public function calonAnggota()
    {
        return $this->belongsTo('App\CalonAnggota','id_calon_anggota');
    }
    public function presensis()
    {
        return $this->hasMany('App\Presensi','id_detail_calon_anggota');
    }
    public function detailTugas()
    {
        return $this->hasMany('App\DetailTugas','id_detail_calon_anggota');
    }
//    public function penilaian()
//    {
//        return $this->hasMany('App\Penilaian','')
//    }

    public function getTotalNilaiAttribute() {

        $nilaiKehadiran = $this->nilai_kehadiran;
        $nilaiTugas = $this->nilai_tugas;
        $hasil = ($nilaiKehadiran+$nilaiTugas) / 2;

        return $hasil;
    }
    public function getNilaiKehadiranAttribute() {

        $presensi = $this->presensis;
        $sumPresensi = 0;
        foreach ($presensi as $key) {
            if($key->kehadiran) {
                $sumPresensi++;
            }
        }

        $totalPresensi = ($sumPresensi / $this->departemen->kegiatans->count());

        return $totalPresensi;
    }

    public function getKehadiranCalonAttribute() {

        $presensi = $this->presensis;
        $sumPresensi = 0;
        foreach ($presensi as $key) {
            if($key->kehadiran) {
                $sumPresensi++;
            }
        }

        $totalPresensi = ($sumPresensi / $this->departemen->kegiatans->count()) * 100;

        return $totalPresensi;
    }
    public function getNilaiTugasAttribute() {

        $detTugas = $this->detailTugas;
        $sumTugas = 0;

        foreach ($detTugas as $key) {
            if($key->nilai_tugas !== null) {
                $sumTugas += $key->nilai_tugas;
            }
        }


        $totalTugas = ($sumTugas / (($this->departemen->tugas->count()) * 100))  ;

        return $totalTugas;
    }

    public function getTugasAttribute() {

        $detTugas = $this->detailTugas;
        $sumTugas = 0;

        foreach ($detTugas as $key) {
            if($key->nilai_tugas !== null) {
                $sumTugas += $key->nilai_tugas;
            }
        }

        $total = $sumTugas / ($this->departemen->tugas->count());

        return $total;
    }

}
