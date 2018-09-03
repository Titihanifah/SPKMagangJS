<?php

namespace App\Http\Controllers;

use App\Departemen;
use App\DetailCalonAnggota;
use App\Periode;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHasilAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get semua data departemen
        $departemen = Departemen::all();
        $activePeriode = Periode::active()->first();
        // menampilkan data detail calon anggota, yg diurutkan dengan urutan favorit,
        // kemudian berdasarkan total nilai tertinggi dikelompokkan sesuai calon anggota
        $detailCalonAnggotas = DetailCalonAnggota::all()->sortByDesc(function($p) {return [$p->favorit, $p->total_nilai];})->groupBy('id_calon_anggota');

//        dd($detailCalonAnggotas, $activePeriode, $departemen);
        return view('bkk.hasilAkhir.index',
            compact('departemen','detailCalonAnggotas','activePeriode'));
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function simpan(Request $request)
    {
        $calonAnggota = CalonAnggota::find($request->id_calon);
        $calonAnggota->departemen_akhir = $request->nama_departemen;
        $calonAnggota->save();

        return response()->json('Success');
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
