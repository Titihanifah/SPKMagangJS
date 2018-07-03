<?php

namespace App\Http\Controllers;

use App\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminPeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $periode = Periode::all();
//        return response()->json($periode);
        return view('bkk.periode.index', compact('periode'));
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

        // create new object Periode
        $this->validate($request, [
            'tahun' => 'required',
            'periode' => 'required',
            'status' => 'required',

        ]);

        $periode = new Periode;
        // fill the object
        $periode->tahun = $request->tahun;
        $periode->periode = $request->periode;
        $periode->status = $request->status;

        //save object to database
        $periode->save();
        //message success
        Session::flash('message', 'Success add data employee!');
        return redirect('/admin/periode'); // Set redirect ketika berhasil
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
            'tahun' => 'required',
            'periode' => 'required',
            'status' => 'required',

        ]);
        $periode= Periode::find($id);
        $periode->tahun = $request->tahun;
        $periode->periode = $request->periode;
        $periode->status = $request->status;
        $periode->save();
        Session::flash('message', 'Success menambah data periode!');
        return redirect('admin/periode'); // Set redirect ketika berhasil
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
        Periode::destroy($id);
        // Beri message kalau berhasil
        Session::flash('message', 'Berhasil menghapus data!');
        return redirect('admin/periode');
    }
}
