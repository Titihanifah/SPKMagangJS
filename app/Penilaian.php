<?php

namespace App;
use App\Tugas;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    //
    public function kriteria()
    {
        return $this->belongsTo('App\Kriteria');
    }
    public function detailCalonAnggota()
    {
        return $this->belongsTo('App\DetailCalonAnggota', 'id_detail_calon_anggota', 'id');
    }

    public function getNilaiAttribute($value)
    {
        $result = 0;
        $detailTugas = DetailTugas::where('id_calon_anggota', $this->detailCalonAnggota->id_calon_anggota)->get();
//                                    ->where('id_kriteria', $this->kriteria->id)->get();
//        return $detailTugas;

        $presensi = Presensi::where('id_calon_anggota', $this->detailCalonAnggota()->id_calon_anggota)->get();

        if( Kriteria::where('id' == 2)){

            foreach ($presensi as $key) {
                $result += $key->kehadiran;
            }
            $result /= $presensi->count();

        }else{

            foreach ($detailTugas as $key) {
                $result += $key->nilai_tugas;
            }
            $result /= $detailTugas->count();
        }

        return $result;
    }
}
