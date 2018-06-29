<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    //
    public function departemen()
    {
        return $this->belongsTo('App\Departemen','id_departemen','id');
    }
    public function periode()
    {
        return $this->belongsTo('App\Periode');
    }
    public function detailTugas()
    {
        return $this->hasMany('App\DetailTugas','id_tugas');
    }

}
