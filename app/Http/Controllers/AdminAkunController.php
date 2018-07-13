<?php

namespace App\Http\Controllers;

use App\Departemen;
use App\User;
use function bcrypt;
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
        $departemen = Departemen::all();
//        return response()->json($user);
        return view('bkk.akun.index',compact('user','departemen'));
    }

    public function reset(Request $request)
    {
        $p = null;
        $user = User::where('id', $request->id_user)->get();
        $p = User::find($user[0]->id);

        $p->id = $request->id_user;
        $p->password = bcrypt($request->password);
        $p->save();

        return response()->json('Success');

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
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        $user = new User;

        $user->role = $request->role;
        $user->id_departemen = $request->id_departemen;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->save();
        Session::flash('message', 'Sukses menambah data akun');

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
        $this->validate($request, [
            'email' => 'required',
            'role' => 'required',
        ]);

        $user= User::find($id);

        $user->name = $request->name;
        $user->role = $request->role;
        $user->id_departemen = $request->id_departemen;
        $user->password = bcrypt($request->password);
        $user->save();
        Session::flash('message', 'Sukses mengubah data akun!');
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
