<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    //
    public function detailPenilaian()
    {
        return $this->hasMany('App\DetailPenilaian');
    }
}
