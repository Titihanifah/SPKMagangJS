<?php

namespace App\Http\Controllers;

use App\DetailTugas;
use App\Tugas;
use App\Periode;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $userTugas = User::where('id', Auth::user()->id_departemen)->with('departemen.tugas')->first();
        $activePeriode = Periode::active()->first();
        $userTugas = Auth::user()->departemen->tugas->where('id_periode', $activePeriode->id);
//        dd($kegiatan);
//        return response()->json($userTugas);

        return view('kadept.tugas.index', compact('userTugas'));
//        $tugas = Tugas::all();
//        return view('kadept.tugas.index')->with('tugas',$tugas);
    }

    /**
    *
    *
    *
    */
    public function penilaianTugas()
    {

//        TODO: gimana create dan upatenya sesuai departemennya

        $activePeriode = Periode::active()->first();
        $detailCalonAnggota = Auth::user()->departemen->detailCalonAnggota;
        $tugas = Auth::user()->departemen->tugas->where('id_periode', $activePeriode->id);

//        dd($detailCalonAnggota);
        foreach ($detailCalonAnggota as $value){

            foreach ($tugas as $key){

                if(DetailTugas::where('id_detail_calon_anggota', $value->id)->where('id_tugas', $key->id)->count() == 0) {
                    $detailTugas = new DetailTugas;
                    $detailTugas->id_detail_calon_anggota = $value->id;
                    $detailTugas->id_tugas = $key->id;
                    $detailTugas->nilai_tugas = null;
                    $detailTugas->save();
                }
            }
        }

        $detailTugas = DetailTugas::all();

        $userTugas = User::where('id', Auth::user()->id)->with('departemen.tugas.detailTugas')->first();

//        $detailTugas = DetailTugas::where('id_calon_anggota', $calonAnggota->id)->where('id_tugas', $tugas->id)->first();
//        dd($detailTugas);
//        dd ($detailTugas->where('id_calon_anggota', $value->id)->where('id_tugas', $key->id)->first()->nilai_tugas)
        return view('kadept.tugas.penilaianTugas', compact('tugas','userTugas','detailCalonAnggota','detailTugas','activePeriode'));


    }


    /**
    *
    *
    *
    */
//    public function penilaianTugasStore()
//    {
//        $tugas = Tugas::all();
//        $calonAnggota = CalonAnggota::all();
//        return view('kadept.tugas.penilaianTugas')->with('tugas',$tugas)->with('calonAnggota',$calonAnggota);
//
//
//    }
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

        // validator
        $this->validate($request, [
            'nama_tugas' => 'required',
            'deadline' => 'required',
        ]);

        $tugas = new Tugas;
        // fill the object
        $tugas->nama_tugas = $request->nama_tugas;
        $tugas->deskripsi = $request->deskripsi;
        $tugas->deadline = $request->deadline;
        $tugas->id_departemen = Auth::user()->id_departemen;
        $activePeriode = Periode::active()->first();
        $tugas->id_periode = $activePeriode->id;

        //save object to database
        $tugas->save();
        //message success
        Session::flash('message', 'Sukses menambah data tugas!');
        //TODO: routingnya belum
        return redirect('/tugas'); // Set redirect ketika berhasil
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
        $this->validate($request, [
            'nama_tugas' => 'required',
            'deadline' => 'required',
        ]);

        $tugas= Tugas::find($id);

        $tugas->nama_tugas = $request->nama_tugas;
        $tugas->deskripsi = $request->deskripsi;
        $tugas->deadline = $request->deadline;
        $tugas->save();
        Session::flash('message', 'Sukses mengubah data tugas!');
        return redirect('/tugas'); // Set redirect ketika berhasil
    }



    public function updatePenilaian(Request $request, $id)
    {


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
        Tugas::destroy($id);
        // Beri message kalau berhasil
        Session::flash('message', 'Berhasil menghapus data!');
        return redirect('/tugas');
    }
}
