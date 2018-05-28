<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kegiatan = Kegiatan::all();
        return view('kadept.kegiatan.index')->with('kegiatan',$kegiatan);
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
        // create new object Employee
        // TODO: use validator?
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'tempat' => 'required',
            'tanggal_kegiatan' => 'required',
            //TODO: kan ada id departemen cara nyambunginnya gimana? apakah perlu ditulis disini juga


        ]);

        $kegiatan = new Kegiatan;
        // fill the object
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $kegiatan->waktu = $request->waktu;

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
