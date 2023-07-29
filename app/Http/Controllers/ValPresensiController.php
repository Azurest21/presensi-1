<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Pertemuan;
use App\Models\Mulai;
use App\Models\Krs;
use Illuminate\Http\Request;

class ValPresensiController extends Controller
{
    public function index(Request $request)
    {
        $dosen = Auth()->user()->nim;

        $matkuls = Matkul::where("dosen_nidn","=",$dosen)->get();
        
        // dd($matkuls);
        
        $pertemuans = Pertemuan::all();

        $matkul_id = $request->matkul_id;
        $pertemuan_id = $request->pertemuan_id;

        $krss = Krs::query();

        $krss->where('matkul_id', $matkul_id);
        $krs = $krss->get();

       // $absensi = Absensi::all();


        $absensis = Absensi::query();

        $absensis->where('matkul_id', $matkul_id);
        $absensis->where('pertemuan_id', $pertemuan_id);
        $absensi = $absensis->get();

        $mulai = Mulai::where('pertemuan_id', $pertemuan_id)
                        ->where('matkul_id', $matkul_id)
                        ->first();


        return view('validasi.presensi', compact('absensi', 'matkuls', 'pertemuans', 'matkul_id', 'pertemuan_id', 'krs', 'mulai'));
    }

    public function hadir($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=1;
        $absensi->save();
          return back();
    }

    public function sakit($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=2;
        $absensi->save();
          return back();
    }
    public function sakit2($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=3;
        $absensi->save();
          return back();
    }
    public function sakit3($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=4;
        $absensi->save();
          return back();
    }
    public function ijin($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=5;
        $absensi->save();
          return back();
    }
    public function ijin2($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=6;
        $absensi->save();
          return back();
    }
    public function ijin3($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=7;
        $absensi->save();
          return back();
    }

    public function view()
    {
        $absensi = Absensi::all();
        return view('Absen.Rekap-absen', compact(['absensi']));
    }


    public function alfa(Request $request)
    {

        $user = $request->user_id;
        $matkul = $request->matkul_id;
        $pertemuan = $request->pertemuan_id;

        $mulai = Mulai::where('pertemuan_id', $pertemuan)
                        ->where('matkul_id', $matkul)
                        ->first();

        Absensi::create([
                        'user_id' => $user,
                        'matkul_id' => $matkul,
                        'pertemuan_id' => $pertemuan,
                        'tgl' => $mulai->created_at,
                        'jammasuk' => '-',
                        'keterangan' => 8
                    ]);


        return back();
    }
}