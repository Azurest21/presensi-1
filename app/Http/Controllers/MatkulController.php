<?php

namespace App\Http\Controllers;

use App\Models\Matkul as ModelsMatkul;
use CreatematakuliahsTable;
use Illuminate\Http\Request;
use App\Models\Tahun;
use App\Models\Dosen;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Matkul = ModelsMatkul::all();
        return view('Absen.data-matkul',compact('Matkul'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $tahun = Tahun::all();
        $dosen = Dosen::all();
        return view('Absen.create-matkul',compact('tahun', 'dosen'));
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
        $dosen = Dosen::findOrFail($request->dosen_nidn);
        ModelsMatkul::create([
            'tahun_id' =>$request->tahun_id,
            'matkul' => $request->matkul,
            'dosen_nidn' => $request->dosen_nidn,
            'user_id'=> $dosen->user_id,
            'sks' => $request->sks
            

        ]);

        return redirect('data-matkul')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Matkul = ModelsMatkul::findorfail($id);
        //echo $matkul;
        return view('Absen.detail-matkul', compact('Matkul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahun = Tahun::all();
        $dosen = Dosen::all();
        $Matkul = ModelsMatkul::findorFail($id);
        return view('Absen.edit-matkul', compact('Matkul', 'tahun', 'dosen'));
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
        $tahun = Tahun::all();
        $dosen = Dosen::all();
        $Matkul = ModelsMatkul::findorfail($id);
        $Matkul->update($request->all());
        return redirect('data-matkul')->with('toast_success', 'Data Berhasil Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Matkul = ModelsMatkul::findorfail($id);
        $Matkul->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
    
}