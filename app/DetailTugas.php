<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTugas extends Model
{
    //
    public function tugas()
    {
        return $this->belongsTo('App\Tugas','id_tugas','id');
    }
}
