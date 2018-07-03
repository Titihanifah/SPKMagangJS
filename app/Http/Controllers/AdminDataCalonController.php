<?php

namespace App\Http\Controllers;

use App\CalonAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

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
        $calonAanggota = CalonAnggota::all();
        return view('bkk.datacalon.index')->with('calonAnggota', $calonAanggota);
    }

    public function importExcel()
    {
        $id_calon_anggota = request()->id_calon_anggota;
        $periode = request()->periode;
        if(Input::hasFile('importExcel')){
            $file = Input::file('importExcel');
            $data = Excel::load($file)->get();
            if(!empty($data)){
                $message = "";
                $index = 0;
                foreach ($data as $value){
                    // cek apakah ada id_calon_anggota dalam database
                    $cekCalonAnggota = CalonAnggota::where('id', $value->id)->first();

                    if(count($cekCalonAnggota) > 0) {
                        // apabila id_calon_anggota suda ada maka ditolak
                        $cekDataAnggota = CalonAnggota::where('id_calon_anggota', $value->id)
                            ->where('id', $value->id)
                            ->where('nama_calon_anggota', $value->nama)
                            ->where('jenis_kelamin', $value->jenis_kelamin)
                            ->where('hardskill', $value->hardskill)
                            ->where('softskill', $value->softskill)
                            ->where('jenis_kelamin', $value->jenis_kelamin)
                            ->where('id_periode', '!=', \App\Periode::where('status','Aktif')->first()->id_periode)
                            ->first(); // untuk menampilkan data teratas

                        if(count($cekDataAnggota) > 0) {
                            //

                        }
                    }
                }
            }
        }
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

//         create new object DataCalon
//        TODO: fieldnya harusnya lengkap
        $this->validate($request, [
            'nama_calon_anggota' => 'required',
            'jenis_kelamin' => 'required',


        ]);

        $calonAnggota = new CalonAnggota;
        // fill the object
        $calonAnggota->nama_calon_anggota = $request->nama_calon_anggota;
        $calonAnggota->hardskill = $request->hardskill;
        $calonAnggota->softskill = $request->softskill;
        $calonAnggota->jenis_kelamin = $request->jenis_kelamin;

        //save object to database
        $calonAnggota->save();
        //message success
        Session::flash('message', 'Success add data data calon anggota!');
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
        //TODO: apakah data calon anggota benar-benar dihapus?
        CalonAnggota::destroy($id);
        // Beri message kalau berhasil
        Session::flash('message', 'Berhasil menghapus data!');
        return redirect('admin/datacalon');
    }
}
