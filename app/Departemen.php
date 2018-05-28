<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{

    public function kegiatan()
    {
        return $this->hasMany('App\Kegiatan');
    }
    public function tugas()
    {
        return $this->hasMany('App\Tugas');
    }
    public function detailCalonAggota()
    {
        return $this->hasMany('App\DetailCalonAnggota');
    }
}
