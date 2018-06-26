<?php

namespace App\Http\Controllers;


use App\DetKemampuanCalon;
use App\KemampuanTambahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use App\DetailCalonAnggota;
class PenilaianKemampuan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kemampuan = KemampuanTambahan::all();
        $detailCalonAnggota = DetailCalonAnggota::where('id_departemen', Auth::user()->id)->get();
//        return response()->json($detailCalonAnggota);
        return view('kadept.penilaianSkill.index', compact('kemampuan','detailCalonAnggota'));
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
        $dt = null;
        $detailKemampCalon = DetKemampuanCalon::where('id_calon_anggota', $request->id_calon_anggota)
            ->where('id_kemampuan_tambahan', $request->id_kemampuan_tambahan )
            ->get();
        if ($detailKemampCalon->count() > 0) {
            $dt = DetKemampuanCalon::find($detailKemampCalon[0]->id);
        } else {
            $dt = new DetKemampuanCalon;
        }
        $dt->id_calon_anggota = $request->id_calon_anggota;
        $dt->id_kemampuan_tambahan = $request->id_kemampuan_tambahan;
        $dt->kepunyaan = $request->kepunyaan;
        $dt->save();

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
