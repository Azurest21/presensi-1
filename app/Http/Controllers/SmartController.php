<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Pertemuan;
use App\Models\Mulai;
use App\Models\Krs;
use App\Models\kriteria;
use App\Models\subkriteria;
use App\Models\Surat;
use App\Models\User;
use Illuminate\Http\Request;

class SmartController extends Controller
{
    public function index (){
        return view('SPK.smart');
    }


    public function rekap (Request $request){

        $matkuls = Matkul::get();
        
        // dd($matkuls);
        
        $pertemuans = Pertemuan::all();
        $surats = Surat::all();

        $subkriteria = subkriteria::get();

        $matkul_id = $request->matkul_id;

        $krss = Krs::query();

        $krss->where('matkul_id', $matkul_id);
        $krs = $krss->get();

       // $absensi = Absensi::all();


        $absensis = Absensi::query();

        $absensis->where('matkul_id', $matkul_id);
        $absensi = $absensis->get();

       


        return view('SPK.rekap', compact('absensi', 'matkuls', 'pertemuans', 'matkul_id', 'krs', 'subkriteria', 'surats'));
    }

    public function cetak (Request $request){
        $surat = Surat::where('id', $request->surat_id)->first();
        $user = User::where('id', $request->user_id)->first();
        return view('surat.cetak', compact('surat', 'user'));
    }

}
