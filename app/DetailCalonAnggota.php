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
    public function penilaian()
    {
        return $this->hasMany('App\Penilaian','id_detail_calon_anggota');
    }

    public function getTotalNilaiAttribute() {

        $bobotTugas =  Kriteria::find(1)->bobot;
        $bobotKehadiran =  Kriteria::find(2)->bobot;

        $nilaiKehadiran = $this->nilai_kehadiran * $bobotKehadiran;
        $nilaiTugas = $this->nilai_tugas * $bobotTugas;
        $hasil = ($nilaiKehadiran+$nilaiTugas);

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

        if($this->departemen->kegiatans->count() == 0){
            $totalPresensi = 0;

        }else {
            $totalPresensi = ($sumPresensi / $this->departemen->kegiatans->count());
        }



        return $totalPresensi;
    }

    public function getKehadiranCalonAttribute() {

        $presensi = $this->presensis;
        $sumPresensi = 0;
//        $bobot = $this->penilaian->kriteria->bobot;
        foreach ($presensi as $key) {
            if($key->kehadiran) {
                $sumPresensi++;
            }
        }

        if($this->departemen->kegiatans->count() == 0){
            $totalPresensi = 0;

        }else {
            $totalPresensi = ($sumPresensi / $this->departemen->kegiatans->count()) * 100  ;
        }


        return $totalPresensi;
    }

    /**
     * @return float|int
     */
    public function getNilaiTugasAttribute() {

        $detTugas = $this->detailTugas;
        $sumTugas = 0;
//        $bobotTugas =  0;
//        $kriteria = $this->penilaian;
//        foreach ($kriteria as $value) {
//            if($value->id_kriteria == 1){
//                $bobotTugas = $value->bobot;
//            }else{
//                $bobotKehadiran = $value->bobot;
//            }
//
//        }
//        $bobot = Kriteria::where(id,$kriteria)->bobot;

        foreach ($detTugas as $key) {
            if($key->nilai_tugas !== null) {
                $sumTugas += $key->nilai_tugas;
            }
        }

        if($this->departemen->tugas->count() == 0){
            $totalTugas = 0;

        }else {
            $totalTugas = $sumTugas / (($this->departemen->tugas->count()) * 100);
        }


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
