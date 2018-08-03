<?php

namespace App\Http\Controllers;

use App\Departemen;
use App\DetailCalonAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekapPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan rekap penilaian
        $departemen = Departemen::all();
        $detailCalonAnggotas = Auth::user()->departemen->detailCalonAnggota->sortByDesc(function($p) {
            return [$p->favorit, $p->total_nilai];
        });

        return view('kadept.rekapPenilaian.index',
            compact('detailCalonAnggotas', 'departemen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function simpan(Request $request)
    {
        $p = null;
        $detCalonAnggota = DetailCalonAnggota::where('id', $request->id_detail_calon_anggota)
            ->where('id_departemen', $request->id_departemen)
            ->get();
        if ($detCalonAnggota->count() > 0) {
            $p = DetailCalonAnggota::find($detCalonAnggota[0]->id);
        } else {
            $p = new DetailCalonAnggota;
        }
        $p->id = $request->id_detail_calon_anggota;
        $p->id_departemen = $request->id_departemen;
        $p->rekomendasi = $request->rekomendasi;
        $p->save();

        return response()->json('Success');
    }

    public function ketSimpan(Request $request)
    {
        $p = null;
        $detCalonAnggota = DetailCalonAnggota::where('id', $request->id_detail_calon_anggota)
            ->where('id_departemen', $request->id_departemen)
            ->get();
        if ($detCalonAnggota->count() > 0) {
            $p = DetailCalonAnggota::find($detCalonAnggota[0]->id);
        } else {
            $p = new DetailCalonAnggota;
        }
        $p->id = $request->id_detail_calon_anggota;
        $p->id_departemen = $request->id_departemen;
        $p->keterangan = $request->keterangan;
        $p->save();


        return response()->json('Success');
    }
    public function ketKehadiran($id)
    {
        $detailCalonAnggota = DetailCalonAnggota::find($id);
        $nilai = $detailCalonAnggota->nilai_kehadiran;

        return response()->json($nilai);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
