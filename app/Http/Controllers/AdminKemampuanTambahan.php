<?php

namespace App\Http\Controllers;

use App\KemampuanTambahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminKemampuanTambahan extends Controller
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

        return view('bkk.kemampuan.index', compact('kemampuan'));
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
        $this->validate($request, [
            'nama_kemampuan' => 'required',
//            'departemen' => 'required',

        ]);

        $kemampuan = new KemampuanTambahan;
        // fill the object
        $kemampuan->nama_kemampuan = $request->nama_kemampuan;
//        $kemampuan->departemen = $request->departemen;

        //save object to database
        $kemampuan->save();
        //message success
        Session::flash('message', 'Sukses menambah kriteria penilaian!');
        return redirect('/admin/kemampuan'); // Set redirect ketika berhasil
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
        $kemampuan = KemampuanTambahan::find($id);

        $kemampuan->nama_kemampuan = $request->nama_kemampuan;
//        $kemampuan->departemen = $request->departemen;
        $kemampuan->save();
        Session::flash('message', 'Sukses mengubah data kemampuan tambahan');
        return redirect('/admin/kemampuan');
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
        KemampuanTambahan::destroy($id);
        // Beri message kalau berhasil
        Session::flash('message', 'Berhasil menghapus data!');
        return redirect('admin/kemampuan');
    }
}
