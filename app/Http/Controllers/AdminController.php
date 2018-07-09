<?php

namespace App\Http\Controllers;

use App\Departemen;
use App\Kegiatan;
use App\Periode;
use App\Tugas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function kegiatan()
    {
        $activePeriode = Periode::active()->first();
        $kegiatan = Kegiatan::all()->where('id_periode', $activePeriode->id);
//        return response()->json($kegiatan);
        return view('bkk.kegiatan.index',compact('kegiatan'));
    }

    public function tugas()
    {
        $activePeriode = Periode::active()->first();
        $tugas = Tugas::with('departemen')->get()->where('id_periode', $activePeriode->id);
        return view('bkk.tugas.index', compact('tugas'));
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
    public function dashboard(Request $request)
    {
        //
        return view('bkk.dashboard');
    }

    public function ubahPasswordUser(Request $request)
    {
//        $ubahpassword=User::find(Auth::user()->id);
//        if (Hash::check($ubahpassword->password,$request->password_lama )){
//            if ($request->password_baru == $request->konfirmasi){
//                $ubahpassword->password = bcrypt($request->konfirmasi);
//                $ubahpassword->save();
//                return back();
//            }
//        }

        $ubahpassword=User::find(Auth::user()->id);
        $ubahpassword->password = bcrypt($request->password);
        $ubahpassword->save();
        return back();


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
