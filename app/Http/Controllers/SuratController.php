<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class SuratController extends Controller
{
    public function index () {
        $surats = Surat::all();
        return view('surat.index', compact('surats'));
    }
    
    public function create()
    {
        return view('surat.create');
    }
    public function store(Request $request){

        Surat::create([
            'nama_surat' => $request->nama_surat,
            'isi_surat' => $request->isi_surat,
            'min_nilai' => $request->min_nilai,
            'maks_nilai' => $request->maks_nilai
        ]);
        return redirect('surat')->with('toast_success', 'Data Berhasil Tersimpan');
    }
    public function destroy($id)
    {
        $Subkriteria = Surat::findorfail($id);
        $Subkriteria->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
    public function edit($id)
    {
        $data = Surat::where('id', $id)->first();
        return view('surat.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
       Surat::where('id', $id)->update([
            'nama_surat' => $request->nama_surat,
            'isi_surat' => $request->isi_surat,
            'min_nilai' => $request->min_nilai,
            'maks_nilai' => $request->maks_nilai
        ]);
     
        return redirect('surat')->with('toast_success', 'Data Berhasil Tersimpan');
    }
}
