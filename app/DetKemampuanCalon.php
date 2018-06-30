<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetKemampuanCalon extends Model
{
    //
    public function calonAnggota()
    {
        return $this->belongsTo('App\CalonAnggota','id_calon_anggota','id');
    }
}
