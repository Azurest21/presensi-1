<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subkriteria as ModelsSubkriteria;
use App\Models\kriteria;

class SubkriteriaController extends Controller
{
    public function index (){
        $Subkriteria = ModelsSubkriteria::all();
        return view('SPK.Subkriteria', compact('Subkriteria'));
    }
    
    public function create()
    {
        $Kriteria = kriteria::all();
        return view('SPK.tambah-sub',compact('Kriteria'));
    }
    public function store(Request $request){
        $Kriteria = Kriteria::findorfail($request->kriteria_id);
        ModelsSubkriteria::create([
            'kriteria_id' => $request->kriteria_id,
            'subkriteria' => $request->subkriteria,
            'point' => $request->point,
            'bobot' => $request->bobot
        ]);
        return redirect('subkriteria')->with('toast_success', 'Data Berhasil Tersimpan');
    }
    public function destroy($id)
    {
        $Subkriteria = ModelsSubkriteria::findorfail($id);
        $Subkriteria->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
    public function edit($id)
    {
        $Subkriteria = ModelsSubkriteria::findorfail($id);
        return view('SPK.editsub', compact('Subkriteria'));
    }
    public function update(Request $request, $id)
    {
        $Subkriteria = ModelsSubkriteria::findorfail($id);
        $Subkriteria->update($request->all());
        return redirect('subkriteria')->with('toast_success', 'Data Berhasil Tersimpan');
    }
}
