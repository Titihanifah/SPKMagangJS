<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KegiatanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama_kegiatan' => $this->nama_kegiatan,
            'tanggal_kegiatan' => $this->tanggal_kegiatan,
            'waktu' => $this->waktu,
            'departemen' => $this->departemen->nama_departemen,
            'jumlah_hadir' => $this->jumlahHadir,
        ];
    }
}
