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
        //
        $departemen = Departemen::all();
        $activePeriode = Periode::active()->first();
//        $detailCalonAnggotas = DetailCalonAnggota::all()->sortBy('prioritas')->groupBy('id_calon_anggota');
//        $detailCalonAnggotas = Auth::user()->departemen->detailCalonAnggota->sortByDesc(function($p) {
//            return [$p->favorit, $p->total_nilai];
//        });
        $detailCalonAnggotas = DetailCalonAnggota::all()->sortByDesc(function($p) {
            return [$p->favorit, $p->total_nilai];
        })->groupBy('id_calon_anggota');

//        dd($detailCalonAnggotas);
//        return response()->json($detailCalonAnggotas);
        return view('bkk.hasilAkhir.index',compact('departemen','detailCalonAnggotas','activePeriode'));
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
