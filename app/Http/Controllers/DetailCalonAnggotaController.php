<?php

namespace App\Http\Controllers;

use App\DetailCalonAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailCalonAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $calonAnggotaDept = User::where('id', Auth::user()->id)->with('departemen.detailCalonAnggota')->first();
//        dd($kegiatan);
//        return response()->json($kegiatan);

        return view('kadept.kegiatan.index', compact('userKegiatan'));
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
//        dd($request);
        $p = null;
        $detailCalonAnggota = DetailCalonAnggota::where('id', $request->id_detail_calon_anggota)
            ->where('id_departemen', $request->id_departemen)
            ->get();
        if ($detailCalonAnggota->count() > 0) {
            $p = DetailCalonAnggota::find($detailCalonAnggota[0]->id);
        } else {
            $p = new DetailCalonAnggota;
        }
        $p->id = $request->id_detail_calon_anggota;
        $p->id_departemen = $request->id_departemen;
        $p->favorit = $request->favorit;
        $p->save();

        return response()->json('Success');
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
