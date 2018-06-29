<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $user = User::with('departemen')->get();
//        return response()->json($user);
        return view('bkk.akun.index')->with('user',$user);
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
        $this->validate($request, [
            'name' => 'required',
            'role' => 'required',
            'id_departemen' => 'required',
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->role = $request->role;
        $user->id_departemen = $request->id_departemen;
        $mail = $user->name;
        $user->email = $mail.'departemen@gmail.com';
//        TODO : ini gimana biar password nya default?
        $user->password = bcrypt('departemen');
        $user->save();
        Session::flash('message', 'Sukses menambah akun');

        return redirect('/admin/akun');
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
        $user= User::find($id);

        $user->name = $request->name;
        $user->role = $request->role;
        $user->id_departemen = $request->id_departemen;
        $user->save();
        Session::flash('message', 'Success add data employee!');
        return redirect('/admin/akun'); // Set redirect ketika berhasil
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
        User::destroy($id);
        // Beri message kalau berhasil
        Session::flash('message', 'Berhasil menghapus data!');
        return redirect('/admin/akun');
    }
}
