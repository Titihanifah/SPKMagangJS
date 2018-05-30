<?php

namespace App\Http\Controllers;

use App\Departemen;
use App\Kegiatan;
use App\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent;
use App\User;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $kegiatan = Departemen::join('kegiatans', 'departemens.id','=','kegiatans.id_departemen')
//            ->join('users', 'departemens.id','=','users.id_departemen')
//            ->where('users.id', Auth::user()->id)->get();
//        $kegiatan = User::find(Auth::user()->id)->departemen->with('kegiatan');
        $userKegiatan = User::where('id', Auth::user()->id)->with('departemen.kegiatans')->first();
//        dd($kegiatan);
//        return response()->json($kegiatan);

		return view('kadept.kegiatan.index', compact('userKegiatan'));


    }

    /**
     * Show the form fr ae
     * or creating a new resource.
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
        // create new object Kegiatan
        // TODO: use validator?
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'waktu' => 'required',
            'tanggal_kegiatan' => 'required',

            //TODO: kan ada id departemen cara nyambunginnya gimana? apakah perlu ditulis disini juga


        ]);

        $kegiatan = new Kegiatan;

        // fill the object
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->id_departemen = Auth::user()->id_departemen;
        //TODO : id periode sesuai yg aktif
        $periode = Periode::where('status','=','aktif')->first();
        $kegiatan->id_periode = $periode->id;

        //save object to database
        $kegiatan->save();
        //message success
        Session::flash('message', 'Sukses menambah data kegiatan!');
        //TODO: routingnya belum

        return redirect('/kegiatan'); // Set redirect ketika berhasil
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
        $kegiatan= Kegiatan::find($id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
//        $kegiatan->waktu = $request->waktu;
//        $kegiatan->tempat = $request->tempat;
//        $kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $kegiatan->save();
        Session::flash('message', 'Success add data employee!');
        return redirect('kadept/kegiatan'); // Set redirect ketika berhasil
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
        Kegiatan::destroy($id);
        // Beri message kalau berhasil
        Session::flash('message', 'Berhasil menghapus data!');
        return redirect('/kegiatan');
    }
}
