<?php

namespace App\Http\Controllers;

use App\DetailCalonAnggota;
use App\Kegiatan;
use App\Periode;
use App\Tugas;
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
            // join untuk menampilkan jumlah calon anggota sesuai dengan departemen
            $grafikGender = CalonAnggota::select('d.nama_departemen', DB::raw('COUNT(dc.id) as jumlah'))->join('detail_calon_anggotas as dc', 'dc.id_calon_anggota', '=', 'calon_anggotas.id')
                ->rightJoin('departemens as d', 'd.id', '=', 'dc.id_departemen')
                ->groupBy('dc.id_departemen')
                ->get();
            $activePeriode = Periode::active()->first();
            $totalKegiatan = Auth::user()->departemen->kegiatans->where('id_periode', $activePeriode->id)->count();
            $totalTugas = Auth::user()->departemen->tugas->where('id_periode', $activePeriode->id)->count();
            $favorit = Auth::user()->departemen->detailCalonAnggota->where('favorit',1)->count();
            $totalCalonAnggota = Auth::user()->departemen->detailCalonAnggota->count();
//            $totalCalonAnggotaL = Auth::user()->departemen->detailCalonAnggota->where('jenis_kelamin', 'laki-laki')->count();
//            $totalCalonAnggotaP = Auth::user()->departemen->detailCalonAnggota->where('jenis_kelamin', 'perempuan')->count();

            return view('dashboard',
                compact('grafikGender', 'totalCalonAnggota', 'totalCalonAnggotaL', 'totalCalonAnggotaP','totalKegiatan','totalTugas','favorit'));
        }else{

            $grafikGender = CalonAnggota::select('d.nama_departemen', DB::raw('COUNT(dc.id) as jumlah'))->join('detail_calon_anggotas as dc', 'dc.id_calon_anggota', '=', 'calon_anggotas.id')
                ->rightJoin('departemens as d', 'd.id', '=', 'dc.id_departemen')
                ->groupBy('dc.id_departemen')
                ->get();

            $favoritAll = DetailCalonAnggota::where('favorit','=',1);

            $activePeriode = Periode::active()->first(); // variabel set periode yg aktif
            // jumlah total seluruh kegiatan pd semua departemen
            $totalKegiatan = Kegiatan::where('id_periode', $activePeriode->id)->count();
            // jumlah total seluruh tugas pd semua departemen
            $totalTugas = Tugas::where('id_periode', $activePeriode->id)->count();
            // jumlah total seluruh anggota
            $totalCalonAnggota = CalonAnggota::where('id_periode', $activePeriode->id)->count();
            // jumlah calon anggota laki-laki
            $totalCalonAnggotaL = CalonAnggota::where('jenis_kelamin', 'laki-laki')
                                ->where('id_periode', $activePeriode->id)->count();
            // jumlah calon anggota perempuan
            $totalCalonAnggotaP = CalonAnggota::where('jenis_kelamin', 'perempuan')
                                ->where('id_periode', $activePeriode->id)->count();
            // jumlah calon anggota yang dikategorikan favorit
            $favorit= DetailCalonAnggota::where('favorit','=', 1)->count();
            return view('adminDashboard', compact( 'totalCalonAnggota','favoritAll',
                        'totalCalonAnggotaL', 'totalCalonAnggotaP','totalKegiatan','totalTugas','favorit','grafikGender'));

        }

//        return view('home');


    }
}
