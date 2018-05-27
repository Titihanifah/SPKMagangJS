<?php

namespace App\Http\Controllers;

use App\CalonAnggota;
use App\Kegiatan;
use App\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: bagaimana join dengan kegiatan sehingga tabel presensi kolomnya bisa dinamis sesuai dengan nama dan jumlah kegiatan

        $presensi   = Presensi::all();
        return view('kadept.presensi.index')->with('presensi',$presensi);
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rekap()
    {
        //
        $kegiatan = Kegiatan::all();
        $calonAnggota = CalonAnggota::all();
        return view('kadept.presensi.rekapPresensi')->with('kegiatan',$kegiatan)->with('calonAnggota', $calonAnggota);
    }
    /**
    * numpang controller ya :D
    *
    *
    */
    public function dashboard()
    {
        return view('kadept.dashboard', ['name' => 'dashboard']);
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
