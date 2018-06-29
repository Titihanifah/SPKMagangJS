<?php

namespace App\Http\Controllers;

use App\CalonAnggota;
use App\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataCalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        TODO: filter berdasarkan departemen ya... :)
        $activePeriode = Periode::active()->first();
        $userCalon = Auth::user()->departemen->detailCalonAnggota;
        //dd($userCalon);
//        $calonAnggota = CalonAnggota::all()->where('id_periode', $activePeriode->id);
        return view('kadept.datacalon.index', compact('userCalon','calonAnggota','activePeriode'));
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
        // Ketua departemen tidak bisa menghapus data calon anggota
    }
}
