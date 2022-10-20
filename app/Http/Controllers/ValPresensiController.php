<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Dosen;
use Illuminate\Http\Request;

class ValPresensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        return view('validasi.presensi', compact('absensi'));
    }

    public function hadir($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=1;
        $absensi->save();
        return redirect('/valpresensi');
    }

    public function tidak($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=2;
        $absensi->save();
        return redirect('/valpresensi');
    }
    public function ijin($id)
    {
        $absensi = Absensi::find($id);
        $absensi->keterangan=3;
        $absensi->save();
        return redirect('/valpresensi');
    }

    public function view()
    {
        $absensi = Absensi::all();
        return view('Absen.Rekap-absen', compact(['absensi']));
    }
}