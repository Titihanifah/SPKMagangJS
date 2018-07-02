<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    //
//    public function detailPenilaian()
//    {
//        return $this->hasMany('App\DetailPenilaian');
//    }
    public function penilaian()
    {
        return $this->hasMany('App\Penilaian','id_kriteria');
    }
}
