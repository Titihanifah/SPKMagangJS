<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonAnggota extends Model
{

    public function detailCalonAnggota()
    {
        return $this->hasMany('App\DetailCalonAnggota', 'id_calon_anggota','id');
    }

//    public function detailCalonAggota()
//    {
//        return $this->hasMany('App\DetailCalonAnggota');
//    }

}
