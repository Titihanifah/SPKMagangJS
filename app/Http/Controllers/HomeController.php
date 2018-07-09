<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
			$grafikGender = CalonAnggota::select('d.nama_departemen', DB::raw('COUNT(dc.id) as jumlah'))->join('detail_calon_anggotas as dc', 'dc.id_calon_anggota', '=', 'calon_anggotas.id')
			->rightJoin('departemens as d', 'd.id', '=', 'dc.id_departemen')
			->groupBy('dc.id_departemen')
			->get();
			// dd($grafikGender);
        return view('home', compact('grafikGender'));
    }
}
