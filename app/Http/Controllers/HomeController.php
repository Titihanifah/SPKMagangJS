<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CalonAnggota;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 0){
            return view('dashboard');
        }else{
            $grafikGender = CalonAnggota::select('d.nama_departemen', DB::raw('COUNT(dc.id) as jumlah'))->join('detail_calon_anggotas as dc', 'dc.id_calon_anggota', '=', 'calon_anggotas.id')
                ->rightJoin('departemens as d', 'd.id', '=', 'dc.id_departemen')
                ->groupBy('dc.id_departemen')
                ->get();
            $totalCalonAnggota = CalonAnggota::all()->count();
            $totalCalonAnggotaL = CalonAnggota::where('jenis_kelamin', 'laki-laki')->count();
            $totalCalonAnggotaP = CalonAnggota::where('jenis_kelamin', 'perempuan')->count();
            // dd($grafikGender);
            return view('adminDashboard', compact('grafikGender', 'totalCalonAnggota', 'totalCalonAnggotaL', 'totalCalonAnggotaP'));
//            return view('adminDashboard');
        }

//        return view('home');


    }
}
