<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    //
    public function departemen()
    {
        return $this->belongsTo('App\Departemen','id_departemen', 'id');
    }
    public function periode()
    {
        return $this->belongsTo('App\Periode','id_periode');
    }
    public function presensi()
    {
        return $this->hasMany('App\Presensi','id_kegiatan');
    }
    public function getJumlahHadirAttribute()
    {
        $present = $this->presensi;
        $sumPresensi = 0;
        foreach ($present as $key) {
            if($key->kehadiran) {
                $sumPresensi++;
            }
        }

//        dd($sumPresensi);
        return $sumPresensi;
    }
}
