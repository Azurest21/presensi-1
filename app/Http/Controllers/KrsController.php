<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs as ModelsKrs;
use App\Models\Matkul;
use App\Models\User;

class KrsController extends Controller
{
    public function index()
    {
        $Krs = ModelsKrs::where('user_id','=',Auth()->user()->id)->get();
        return view('Mhs.krs.index',compact('Krs'));
    }
    public function create()
    {
        $matkul = Matkul::all();
        $user = User::all();
        return view('Mhs.krs.create-krs',compact('matkul'));
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

        ModelsKrs::create([
            'matkul_id' =>$request->matkul_id,
            'user_id'=>Auth()->user()->id,
            

        ]);

        return redirect('krs')->with('toast_success', 'Data Berhasil Tersimpan');
    }
    public function destroy($id)
    {
        $Krs = ModelsKrs::findorfail($id);
        $Krs->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }

    
}
