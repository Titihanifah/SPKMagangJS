<?php

namespace App\Http\Controllers;

use App\CalonAnggota;
use App\Departemen;
use App\DetailCalonAnggota;
use App\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminDataCalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: join dengan tabel detail_calon_anggotas
        //
        $calonAnggota = CalonAnggota::all();
        $detailCalonAnggota = DetailCalonAnggota::all();
        $departemen = Departemen::all();
        return view('bkk.datacalon.index', compact('calonAnggota', 'detailCalonAnggota', 'departemen'));
    }

    public function importExcel(Request $request)
    {
        $this->validate($request, [
            'file_excel' => 'required|file' // xls file
        ]);
        $results = Excel::load($request->file_excel, function($reader) {
        })->get();
        foreach ($results as $key) {
            $errors = [];
            $errCount = 0;
            $departemenSatu = Departemen::where('nama_departemen', $key->departemen_satu)->get();
            $departemenDua = Departemen::where('nama_departemen', $key->departemen_dua)->get();
            $periodeAktif = Periode::where('status', 1)->get();
            if($departemenSatu->count() == 0) {
                $errors[] = "Nama departemen ".$key->departemen_satu." tidak valid";
                $errCount++;
            }
            if($departemenDua->count() == 0) {
                $errors[] = "Nama departemen ".$key->departemen_dua." tidak valid";
                $errCount++;
            }
            if($periodeAktif->count() == 0) {
                $errors[] = "Tidak ada periode yang sedang aktif";
                $errCount++;
            }
            $calonAnggota                           = new CalonAnggota;
            $calonAnggota->nama_calon_anggota       = $key->nama_calon_anggota;
            $calonAnggota->jenis_kelamin            = ($key->jenis_kelamin == 'P' ? 'perempuan' : 'laki-laki');
            $calonAnggota->asal                     = $key->asal;
            $calonAnggota->alamat_yogyakarta        = $key->alamat_yogyakarta;
            $calonAnggota->sumber_belajar_islam     = $key->sumber_belajar_islam;
            $calonAnggota->pengalaman_organisasi    = $key->pengalaman_organisasi;
            $calonAnggota->pengalaman_kepanitiaan   = $key->pengalaman_kepanitiaan;
            $calonAnggota->minat                    = $key->minat;
            $calonAnggota->hardskill                = $key->hardskill;
            $calonAnggota->softskill                = $key->softskill;
            $calonAnggota->riwayat_penyakit         = $key->riwayat_penyakit;
            $calonAnggota->id_periode               = $periodeAktif->first()->id;
            $calonAnggota->save();

            $detCalonAnggotaSatu                    = new DetailCalonAnggota;
            $detCalonAnggotaSatu->id_departemen     = $departemenSatu->first()->id;
            $detCalonAnggotaSatu->id_calon_anggota  = $calonAnggota->id;
            $detCalonAnggotaSatu->prioritas         = 1;
            $detCalonAnggotaSatu->save();

            $detCalonAnggotaDua                    = new DetailCalonAnggota;
            $detCalonAnggotaDua->id_departemen     = $departemenDua->first()->id;
            $detCalonAnggotaDua->id_calon_anggota  = $calonAnggota->id;
            $detCalonAnggotaDua->prioritas         = 2;
            $detCalonAnggotaDua->save();
        }
        Session::flash('message', 'Berhasil mengimpor!');
        return redirect('admin/datacalon');
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
        $errors = [];
//         create new object DataCalon
//        TODO: fieldnya harusnya lengkap
        $this->validate($request, [
            'nama_calon_anggota' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $calonAnggota = new CalonAnggota;
        // fill the object
        $periodeAktif = Periode::where('status', 1)->get();

        $calonAnggota->nama_calon_anggota       = $request->nama_calon_anggota;
        $calonAnggota->jenis_kelamin            = ($request->jenis_kelamin == 'P' ? 'perempuan' : 'laki-laki');
        $calonAnggota->asal                     = $request->asal;
        $calonAnggota->alamat_yogyakarta        = $request->alamat_yogyakarta;
        $calonAnggota->sumber_belajar_islam     = $request->sumber_belajar_islam;
        $calonAnggota->pengalaman_organisasi    = $request->pengalaman_organisasi;
        $calonAnggota->pengalaman_kepanitiaan   = $request->pengalaman_kepanitiaan;
        $calonAnggota->minat                    = $request->minat;
        $calonAnggota->hardskill                = $request->hardskill;
        $calonAnggota->softskill                = $request->softskill;
        $calonAnggota->riwayat_penyakit         = $request->riwayat_penyakit;
        $calonAnggota->id_periode               = $periodeAktif->first()->id;
        $calonAnggota->save();

        $detCalonAnggotaSatu                    = new DetailCalonAnggota;
        $detCalonAnggotaSatu->id_departemen     = $request->departemen_satu;
        $detCalonAnggotaSatu->id_calon_anggota  = $calonAnggota->id;
        $detCalonAnggotaSatu->prioritas         = 1;
        $detCalonAnggotaSatu->save();

        $detCalonAnggotaDua                    = new DetailCalonAnggota;
        $detCalonAnggotaDua->id_departemen     = $request->departemen_satu;
        $detCalonAnggotaDua->id_calon_anggota  = $calonAnggota->id;
        $detCalonAnggotaDua->prioritas         = 2;
        $detCalonAnggotaDua->save();
        //message success
        Session::flash('message', 'Success menambah data calon anggota!');
        return redirect('/admin/datacalon'); // Set redirect ketika berhasil
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
            'nama_calon_anggota' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $calonAnggota = CalonAnggota::find($id);
        // fill the object
        $periodeAktif = Periode::where('status', 1)->get();

        $calonAnggota->nama_calon_anggota       = $request->nama_calon_anggota;
        $calonAnggota->jenis_kelamin            = ($request->jenis_kelamin == 'P' ? 'perempuan' : 'laki-laki');
        $calonAnggota->asal                     = $request->asal;
        $calonAnggota->alamat_yogyakarta        = $request->alamat_yogyakarta;
        $calonAnggota->sumber_belajar_islam     = $request->sumber_belajar_islam;
        $calonAnggota->pengalaman_organisasi    = $request->pengalaman_organisasi;
        $calonAnggota->pengalaman_kepanitiaan   = $request->pengalaman_kepanitiaan;
        $calonAnggota->minat                    = $request->minat;
        $calonAnggota->hardskill                = $request->hardskill;
        $calonAnggota->softskill                = $request->softskill;
        $calonAnggota->riwayat_penyakit         = $request->riwayat_penyakit;
        $calonAnggota->id_periode               = $periodeAktif->first()->id;
        $calonAnggota->save();

        $detCalonAnggotaSatu                    = new DetailCalonAnggota;
        $detCalonAnggotaSatu->id_departemen     = $request->departemen_satu;
        $detCalonAnggotaSatu->id_calon_anggota  = $calonAnggota->id;
        $detCalonAnggotaSatu->prioritas         = 1;
        $detCalonAnggotaSatu->save();

        $detCalonAnggotaDua                    = new DetailCalonAnggota;
        $detCalonAnggotaDua->id_departemen     = $request->departemen_satu;
        $detCalonAnggotaDua->id_calon_anggota  = $calonAnggota->id;
        $detCalonAnggotaDua->prioritas         = 2;
        $detCalonAnggotaDua->save();
        //message success
        Session::flash('message', 'Success mengubah data calon anggota!');
        return redirect('/admin/datacalon'); // Set redirect ketika berhasil
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //TODO: apakah data calon anggota benar-benar dihapus?
        CalonAnggota::destroy($id);

        Session::flash('message', 'Berhasil menghapus data!');
        return redirect('admin/datacalon');
    }
}
