<?php
/**
 * Created by PhpStorm.
 * User: titih
 * Date: 17/08/2018
 * Time: 20.18
 */


namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TugasResource extends JsonResource
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
            'nama_tugas' => $this->nama_tugas,
            'deskripsi' => $this->deskripsi,
            'deadline' => $this->deadline,
            'departemen' => $this->departemen->nama_departemen,
        ];
    }
}
