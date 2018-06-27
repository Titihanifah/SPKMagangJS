<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{

    public function kegiatans()
    {
        return $this->hasMany('App\Kegiatan','id_departemen');
    }
    public function tugas()
    {
        return $this->hasMany('App\Tugas','id_departemen');
    }
    public function detailCalonAggota()
    {
        return $this->hasMany('App\DetailCalonAnggota','id_calon_anggota');
    }
    public function user()
    {
        return $this->hasOne('App\User','id_departemen','id');
    }

}
