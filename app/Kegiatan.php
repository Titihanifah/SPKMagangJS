<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    //
    public function departemen()
    {
        return $this->belongsTo('App\Departemen','id_departemen');
    }
    public function periode()
    {
        return $this->belongsTo('App\Periode','id_periode');
    }
    public function presensi()
    {
        return $this->hasMany('App\Presensi','id_kegiatan');
    }
}
