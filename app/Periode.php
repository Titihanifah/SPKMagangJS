<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    //
    public function calonAnggota()
    {
        return $this->hasMany('App\CalonAggota');
    }
    public function tugas()
    {
        return $this->hasMany('App\Tugas');
    }
    public function kegiatans()
    {
        return $this->hasMany('App\Kegiatan','id_periode');
    }

}
