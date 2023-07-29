<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria as ModelsKriteria;

class KriteriaController extends Controller
{
    public function index (){
        $Kriteria = ModelsKriteria::all();
        return view('SPK.kriteria', compact('Kriteria'));
    }
    public function create()
    {
        return view('SPK.tambah-kriteria');
    }
    public function store(Request $request){
        ModelsKriteria::create([
            'kriteria' => $request->kriteria
        ]);
        return redirect('kriteria')->with('toast_success', 'Data Berhasil Tersimpan');
    }
    public function destroy($id)
    {
        $Kriteria = ModelsKriteria::findorfail($id);
        $Kriteria->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
    // public function edit($id){
    //     $Kriteria = ModelsKriteria::findorfail($id);
    //     return view('SPK.edit-kriteria', compact('Kriteria'));
    // }
    // public function update(Request $request, $id){
    //     $Kriteria = ModelsKriteria::findorfail($id);
    //     $Kriteria->update($request->all());
    //     return redirect('kriteria')->with('toast_success', 'Data Berhasil Tersimpan');
    // }
}
