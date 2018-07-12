<?php

namespace App\Http\Controllers;

use App\CalonAnggota;
use App\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminDepartemenController extends Controller
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
        return view('bkk.departemen.index')->with('departemen', $departemen);

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
//        create new object Departemen
        $this->validate($request, [
            'nama_departemen' => 'required',
        ]);

        $departemen = new Departemen;
        // fill the object
        $departemen->nama_departemen = $request->nama_departemen;


        //save object to database
        $departemen->save();
        //message success
        Session::flash('message', 'Sukses menambah data calon anggota!');
        return redirect('/admin/departemen'); // Set redirect ketika berhasil
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function departemen_akhir()
    {
        //
        $activePeriode = Periode::active()->first();
        $calonAnggota = CalonAnggota::where('id_periode', $activePeriode->id);

        return view('bkk.departemenAkhir.index',compact('calonAnggota','activePeriode'));
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
            'nama_departemen' => 'required',
        ]);

        $departemen = Departemen::find($id);

        $departemen->nama_departemen = $request->nama_departemen;
        $departemen->save();
        Session::flash('message', "Sukses mengubah data departemen");
        return redirect('/admin/departemen');
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
        Departemen::destroy($id);
        return redirect('admin/departemen');
    }
}
