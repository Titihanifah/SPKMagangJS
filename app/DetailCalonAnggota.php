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
        return $this->belongsTo('App\Kegiatan','id_calon_anggota');
    }

}
