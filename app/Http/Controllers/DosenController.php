<?php

namespace App\Http\Controllers;

use App\Models\Dosen as ModelsDosen;
use Illuminate\Http\Request;
use App\Models\User;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Dosen = ModelsDosen::all();
        return view('Dosen.data-dosen',compact('Dosen'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Dosen.create-dosen');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $user = new User();
        $user->nim = "0";
        $user->nama = $request->namadosen;
        $user->email = $request->email;
        $user->level = "dosen";
        $user->password = bcrypt("Umbjm@123");
        $user->save();
        
        $dosen = new  ModelsDosen();
        $dosen->user_id = $user->id;
        $dosen->namadosen = $request->namadosen;
        $dosen->nip = $request->nip;
        $dosen->nidn = $request->nidn;
        $dosen->save();

        return redirect('data-dosen')->with('toast_success', 'Data Berhasil Tersimpan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($nidn)
    {
        $dosen = ModelsDosen::findorfail($nidn);
        //echo $matkul;
        return view('Dosen.detail-dosen', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nidn)
    {
        $dosen = ModelsDosen::findorfail($nidn);
        return view('Dosen.edit-dosen', compact('dosen'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nidn)
    {

        $dosen = ModelsDosen::findorfail($nidn);
        $dosen->update($request->all());
        return redirect('data-dosen')->with('toast_success', 'Data Berhasil Tersimpan');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nidn)
    {
        $dosen = ModelsDosen::findorfail($nidn);
        $dosen->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}