<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Matkul;
use App\Models\Absensi;
use App\Models\Dosen;
use App\Models\Mulai;
use Illuminate\Http\Request;
use App\Models\Tahun;
use App\Models\pertemuan;
use App\Models\keterangan;
use App\Models\Krs;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function matkul(){
        $datamatkul = Matkul::all();
        return view('Mhs.presensi_masuk', compact('datamatkul'));
    }
    public function datamatkul(Request $request, $id){
        $datamatkul = Matkul::where('level',"admin")->get()->find($id);
        $datamatkul->update([
            'user_id' => $request->user_id,
            'datamatkul' => $request->datamatkul,
            
        ]);
        return redirect()->route('data-matkul')->with('success',' Data Berhasil Di Update');
    }
    public function index()
    {
        // dd(Auth()->user()->id);
        $datamatkul = Krs::where('user_id','=',Auth()->user()->id)->get();
        $pertemuan_id = pertemuan::all();
        
        return view('Mhs.presensi_masuk', compact('datamatkul', 'pertemuan_id'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {
        $Absensi = Absensi::all();
        $timezone = 'Asia/Makassar'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i');
        $matkul_id = $request->matkul_id;
        $keterangan = $request->keterangan;
       // $tahun_id = $request->tahun_id;
        $pertemuan_id = $request->pertemuan_id;
        if($file = $request->hasFile('dokumen')){
            
            $file = $request->file('dokumen');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/dokumen';
            $file->move($destinationPath,$fileName); 
        }    
        
        $mulai = Mulai::where('matkul_id', $matkul_id)
                        ->where('pertemuan_id', $pertemuan_id)
                        ->first();

        if($mulai) {
              $Absensi = Absensi::where([
                    ['user_id','=',auth()->user()->id],
                    ['matkul_id','=',$matkul_id],
                    ['pertemuan_id','=',$pertemuan_id],
                    ['tgl','=',$tanggal],
                ])->first();
                
                if ($Absensi) {


                        $status_title = 'error';
                        $title = 'Gagal!';
                        $message = 'Oopss.. Anda sudah melakukan absen sebelumnya.!';


                   //  return redirect('absen-masuk')->with('info', 'Anda sudah melakukan absen sebelumnya.');


                } else {
                    $start_time =  date("H:i", strtotime($mulai->start_time));
                    $end_time =  date("H:i", strtotime($mulai->end_time));
                    $waktu_absen = $localtime;

                    if(($waktu_absen > $start_time) && ($waktu_absen < $end_time)) {

                    Absensi::create([
                        'user_id' => auth()->user()->id,
                        'matkul_id' => $matkul_id,
                        'pertemuan_id' => $pertemuan_id,
                        'tgl' => $tanggal,
                        'jammasuk' => $localtime,
                        'keterangan' => $keterangan,
                        'file'=>$fileName
                    ]);

                    //  return redirect('absen-masuk')->with('success', 'Data Absen Berhasil Tersimpan');


                        $status_title = 'success';
                        $title = 'Berhasil!';
                        $message = 'Data Absen Berhasil Tersimpan!';


                  } else if($waktu_absen < $start_time) {



                        $status_title = 'error';
                        $title = 'Gagal!';
                        $message = 'Oopss.. Pertemuan Belum Dimulai!';

                   // return redirect('absen-masuk')->with('info', 'Pertemuan Belum Dimulai!');
                  }else if($waktu_absen > $end_time) {
                    // Absensi::create([
                    //     'user_id' => auth()->user()->id,
                    //     'tahun_id' => $request->tahun_id,
                    //     'matkul_id' => $matkul_id,
                    //     'pertemuan_id' => $pertemuan_id,
                    //     'tgl' => $tanggal,
                    //     'jammasuk' => $localtime,
                    // ]);

                    $status_title = 'error';
                        $title = 'Gagal!';
                        $message = 'Oopss.. Anda terlambat!';
                   //return redirect('absen-masuk')->with('info', 'Anda terlambat!');
                  }
                }

        } else {
             $status_title = 'error';
                        $title = 'Gagal!';
                        $message = 'Pertemuan belum dimulai oleh dosen / tidak ditemukan.';
             //return redirect('absen-masuk')->with('info', 'Pertemuan belum dimulai oleh dosen / tidak ditemukan.');
        }

          echo json_encode(array(
                        'title' => $title,
                        'status' => $status_title,
                        'message' => $message
                    ));
      
         

       
    }

    public function index1()
    {
        // dd(Auth()->user()->id);
        $datamatkul = Krs::where('user_id','=',Auth()->user()->id)->get();
        $pertemuan_id = pertemuan::all();
        
        return view('Mhs.ijin.index', compact('datamatkul', 'pertemuan_id'));
    }
    public function store1(Request $request)
    {
        $Absensi = Absensi::all();
        $timezone = 'Asia/Makassar'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i');
        $matkul_id = $request->matkul_id;
        $keterangan = $request->keterangan;
       // $tahun_id = $request->tahun_id;
        $pertemuan_id = $request->pertemuan_id;
        if($file = $request->hasFile('dokumen')){
            
            $file = $request->file('dokumen');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/dokumen';
            $file->move($destinationPath,$fileName); 
        }    
        
        $mulai = Mulai::where('matkul_id', $matkul_id)
                        ->where('pertemuan_id', $pertemuan_id)
                        ->first();

        if($mulai) {
              $Absensi = Absensi::where([
                    ['user_id','=',auth()->user()->id],
                    ['matkul_id','=',$matkul_id],
                    ['pertemuan_id','=',$pertemuan_id],
                    ['tgl','=',$tanggal],
                ])->first();
                
                if ($Absensi){
                     return redirect('ijin')->with('info', 'Anda sudah melakukan absen sebelumnya.');
                }else{
                    $start_time =  date("H:i", strtotime($mulai->start_time));
                    $end_time =  date("H:i", strtotime($mulai->end_time));
                    $waktu_absen = $localtime;

                    if(($waktu_absen > $start_time) && ($waktu_absen < $end_time)) {

                    Absensi::create([
                        'user_id' => auth()->user()->id,
                        'matkul_id' => $matkul_id,
                        'pertemuan_id' => $pertemuan_id,
                        'tgl' => $tanggal,
                        'jammasuk' => $localtime,
                        'keterangan' => $keterangan,
                        'file'=>$fileName
                    ]);

                      return redirect('ijin')->with('success', 'Data Absen Berhasil Tersimpan');
                  } else if($waktu_absen < $start_time) {
                    return redirect('ijin')->with('info', 'Pertemuan Belum Dimulai!');
                  }else if($waktu_absen > $end_time) {
                    // Absensi::create([
                    //     'user_id' => auth()->user()->id,
                    //     'tahun_id' => $request->tahun_id,
                    //     'matkul_id' => $matkul_id,
                    //     'pertemuan_id' => $pertemuan_id,
                    //     'tgl' => $tanggal,
                    //     'jammasuk' => $localtime,
                    // ]);
                    return redirect('ijin')->with('info', 'Anda terlambat!');
                  }
                }

        } else {
             return redirect('ijin')->with('info', 'Pertemuan belum dimulai oleh dosen / tidak ditemukan.');
        }
      
         

       
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function halamanrekap()
    {
        // $dosen = Auth()->user()->id;
        // $datamatkul = Matkul::where("user_id","=",$dosen)->get();
        if (Auth()->user()->level == "admin"){
            $datamatkul = Matkul::all();
        }
        else{
            $dosen = Auth()->user()->nim;
        $datamatkul = Matkul::where("dosen_nidn","=",$dosen)->get();
        }
        // $datamatkul = Matkul::all();
        $pertemuan_id = pertemuan::all();
        return view('Absen.Halaman-rekap-mahasiswa', compact('datamatkul', 'pertemuan_id'));
    }

   
    public function tampildatakeseluruhan($tglawal,$tglakhir,$matkul_id)
    {
    
        $Absensi = Absensi::with('user')->whereBetween('tgl',[$tglawal, $tglakhir])->where('matkul_id', [$matkul_id])->orderBy('tgl','asc')->get();
        $datamatkul = Matkul::all();
        $pertemuan_id = pertemuan::all();
        
        return view('Absen.Rekap-absen',compact('Absensi','datamatkul', 'pertemuan_id'));
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function mulai(Request $request)
{
    $this->validate($request, [
        'start_time' => 'date_format:H:i',
        'end_time' => 'date_format:H:i|after:start_time',
    ]);
    return view('Dosen.mulai');

    // do other stuff
}
}
