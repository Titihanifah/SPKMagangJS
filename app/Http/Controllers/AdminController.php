<?php

namespace App\Http\Controllers;

use App\Departemen;
use App\Kegiatan;
use App\Periode;
use App\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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

    public function kegiatan()
    {
//        $kegiatan = Kegiatan::where('id_departemen',Departemen::id)->with('departemen')->get();
//        $kegiatan = DB::table('kegiatans')
//            ->join('departemens', 'departemens.id', '=', 'kegiatans.id_departemen')
//            ->get();
//        $kegiatan = Kegiatan::with('departemen')->where('id_departemen', departemen()->id)->get();
        $activePeriode = Periode::active()->first();
        $kegiatan = Kegiatan::all()->where('id_periode', $activePeriode->id);
//        return response()->json($kegiatan);
        return view('bkk.kegiatan.index',compact('kegiatan'));
    }

    public function tugas()
    {
        $activePeriode = Periode::active()->first();
        $tugas = Tugas::with('departemen')->get()->where('id_periode', $activePeriode->id);
        return view('bkk.tugas.index', compact('tugas'));
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
