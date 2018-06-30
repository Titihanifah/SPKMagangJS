<?php

namespace App\Http\Controllers;


use App\Departemen;
use App\DetailCalonAnggota;
use App\Kegiatan;
use App\Periode;
use App\Presensi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
//        $calonAnggota   = CalonAnggota::all();
//        $kegiatan   = Kegiatan::all();
//
//        foreach ($calonAnggota as $value){
//
//            foreach ($kegiatan as $key){
//
//                if(Presensi::where('id_calon_anggota', $value->id)->where('id_kegiatan', $key->id)->count() == 0) {
//                    $presensi = new Presensi;
//                    $presensi->id_calon_anggota = $value->id;
//                    $presensi->id_kegiatan = $key->id;
//                    $presensi->kehadiran = 1;
//                    $presensi->save();
//                }
//            }
//        }
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
//        $detailCalonAnggota   = DetailCalonAnggotaController::where('id', Auth::user()->id_departemen)->with('departemen');
        $detailCalonAnggota =  Auth::user()->departemen->detailCalonAnggota;
        $activePeriode = Periode::active()->first();
        $kegiatan   = Auth::user()->departemen->kegiatans->where('id_periode', $activePeriode->id);
//        dd($kegiatan);


//        dd(User::where('id', Auth::user()->id)->with('departemen.detailCalonAnggota')->first());
        foreach ($detailCalonAnggota as $value) {

            foreach ($kegiatan as $key){

                if(Presensi::where('id_detail_calon_anggota', $value->id)->where('id_kegiatan', $key->id)->count() == 0) {
                    $presensi = new Presensi;
                    $presensi->id_detail_calon_anggota = $value->id;
                    $presensi->id_kegiatan = $key->id;
                    $presensi->kehadiran = 1;
                    $presensi->save();
                }
            }
        }
        $presensi   = Presensi::all();
//        $anggotaP = Presensi::where(groupBy('id_calon_anggota'));
//        $departemen = Departemen::all();

        $userKegiatan = User::where('id', Auth::user()->id)->with('departemen.kegiatans.presensi')->first();
//        return response()->json($userKegiatan);

        return view('kadept.presensi.rekapPresensi',compact('kegiatan','detailCalonAnggota','userKegiatan','presensi','activePeriode'));
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

    public function simpan(Request $request)
    {
        $p = null;
        $presensi = Presensi::where('id_detail_calon_anggota', $request->id_detail_calon_anggota)
            ->where('id_kegiatan', $request->id_kegiatan)
            ->get();
        if ($presensi->count() > 0) {
            $p = Presensi::find($presensi[0]->id);
        } else {
            $p = new Presensi;
        }
        $p->id_detail_calon_anggota = $request->id_detail_calon_anggota;
        $p->id_kegiatan = $request->id_kegiatan;
        $p->kehadiran = $request->kehadiran;
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
