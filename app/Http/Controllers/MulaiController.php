<?php

namespace App\Http\Controllers;

use App\Models\Matkul as ModelsMatkul;
use App\Models\Matkul;
use App\Models\Pertemuan;
use App\Models\Mulai;
use CreatematakuliahsTable;
use Illuminate\Http\Request;
use App\Models\Tahun;
use App\Models\Dosen;

class MulaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $datas = Mulai::all();
        return view('Dosen.mulai.index',compact('datas'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $dosen = Auth()->user()->id;
        $matkuls = Matkul::where("user_id","=",$dosen)->get();
        // dd($matkuls);
        $pertemuans = Pertemuan::all();
        return view('Dosen.mulai.create',compact('matkuls', 'pertemuans'));
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
        $matkul = $request->matkul;
        Mulai::create([
            'matkul_id' =>$request->matkul_id,
            'pertemuan_id' => $request->pertemuan_id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
            

        ]);

        return redirect('mulai')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

/*        $matkuls = Matkul::all();
        $pertemuans = Pertemuan::all();
        return view('Dosen.mulai.create',compact('matkuls', 'pertemuans'));
        $Matkul = Mulai::findorfail($id);
        //echo $matkul;
        return view('Absen.detail-matkul', compact('Matkul'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mulai::findorfail($id);
        $matkuls = Matkul::all();
        $pertemuans = Pertemuan::all();
        return view('Dosen.mulai.edit',compact('matkuls', 'pertemuans', 'data'));
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
         Mulai::where('id', $id)->update([
            'matkul_id' =>$request->matkul_id,
            'pertemuan_id' => $request->pertemuan_id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
            

        ]);
        return redirect('mulai')->with('toast_success', 'Data Berhasil Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Matkul = Mulai::findorfail($id);
        $Matkul->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
    
}