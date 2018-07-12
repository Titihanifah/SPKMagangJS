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

        ]);

        $periode = new Periode;
        // fill the object
        $periode->tahun = $request->tahun;
        $periode->periode = $request->periode;
        $periode->status = 0;

        //save object to database
        $periode->save();
        //message success
        Session::flash('message', 'Sukses menambah data Periode!');
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

        ]);


//        if($request->status == 0) {
//            Session::flash('message', 'Gagal mengubah data periode!');
//            return redirect('admin/periode');
//        }
        $periode= Periode::find($id);
        $periode->tahun = $request->tahun;
        $periode->periode = $request->periode;
        $periode->save();


        Session::flash('message', 'Sukses mengubah data periode!');
        return redirect('admin/periode'); // Set redirect ketika berhasil
    }

    public function changeActive($id) {

        $periode= Periode::find($id);
        $periode->status = 1;
        $periode->save();
        Periode::whereNotIn('id', [$periode->id])->update(['status' => 0]);

        return response()->json([], 204);
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
