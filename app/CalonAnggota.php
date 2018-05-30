<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonAnggota extends Model
{

    public function detailCalonAnggota()
    {
        return $this->hasMany('App\DetailCalonAnggota');
    }
    public function detailTugas()
    {
        return $this->hasMany('App\DetailTugas');
    }
    public function presensi()
    {
        return $this->hasMany('App\Presensi');
    }
//    public function rekomendasi()
//    {
//        return $this->hasMany('App\Rekomendasi');
//    }
    public function detailCalonAggota()
    {
        return $this->hasMany('App\DetailCalonAnggota');
    }
}
