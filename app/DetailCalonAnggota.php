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
    public function presensi()
    {
        return $this->hasMany('App\Presensi','id_detail_calon_anggota');
    }
    public function detailTugas()
    {
        return $this->hasMany('App\DetailTugas','id_detail_calon_anggota');
    }

    public function getTotalNilaiAttribute($value) {
        return 50;
    }
    public function getNilaiKehadiranAttribute() {
        $presensi = $this->presensi;
        $sumPresensi = 0;
        foreach ($presensi as $key) {
            if($key->kehadiran) {
                $sumPresensi++;
            }
        }
        $totalPresensi = $sumPresensi / $presensi->count();

        return $totalPresensi;
    }
    public function getNilaiTugasAttribute() {
        return 50;
    }

}
