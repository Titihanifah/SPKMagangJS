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
    public function detailCalonAnggotaRek()
    {
        return $this->hasMany('App\DetailCalonAnggota','rekomendasi');
    }
    public function detailCalonAnggota()
    {
        return $this->hasMany('App\DetailCalonAnggota','id_departemen');
    }
    public function user()
    {
        return $this->hasMany('App\User','id_departemen');
    }

}
