<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    //
    public function kegiatans()
    {
        return $this->belongsTo('App\Kegiatan','id_kegiatan');
    }
    public function detailCalonAnggota()
    {
        return $this->belongsTo('App\DetailCalonAnggota','id_detail_calon_anggota');
    }
//    public function getKehadiranAttribute($value)
//    {
////
////        $result = 0;
////        $presensi = Presensi::where('id_kegiatan', $this->kegiatans->id)->get();
////
////        foreach ($presensi as $key)
////        {
////            $result = $key->kehadiran;
////        }
////
////        return $result;
//    }
//
   public function banyakHadir(){

        $jumlahHadir = Presensi::withCount('kehadiran' ,'=','1')->get();
        return $jumlahHadir;

   }

}
