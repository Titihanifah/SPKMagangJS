<?php

namespace App\Http\Controllers;

use App\DetailTugas;
use Illuminate\Http\Request;

class PenilaianTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $detailTugas= DetailTugas::find($id);

        $detailTugas->id_tugas = $request->id_tugas;
        $detailTugas->id_calon_anggota = $request->id_calon_anggota;
        $detailTugas->nilai_tugas = $request->nilai_tugas;
        $detailTugas->save();
        Session::flash('message', 'Success add data employee!');
        return redirect('/penilaianTugas'); // Set redirect ketika berhasil
    }

    public function simpan(Request $request)
    {
        $dt = null;
        $detailTugas = DetailTugas::where('id_detail_calon_anggota', $request->id_detail_calon_anggota)
            ->where('id_tugas', $request->id_tugas)
            ->get();
        if ($detailTugas->count() > 0) {
            $dt = DetailTugas::find($detailTugas[0]->id);
        } else {
            $dt = new DetailTugas;
        }
        $dt->id_detail_calon_anggota = $request->id_detail_calon_anggota;
        $dt->id_tugas = $request->id_tugas;
        $dt->nilai_tugas = $request->nilai_tugas;
        $dt->save();

        return response()->json('Success');
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
