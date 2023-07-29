
<!DOCTYPE html>
<html lang="en">

<head>
  @include('Template.head1')
</head>
<style type="text/css">
    th {
        text-align: center !important;
        vertical-align: middle !important;
    }
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">REKAP S.M.A.R.T<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      @include('Template.navbar1')
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="" style="overflow-y: scroll !important;">
    <div class="container" data-aos="fade-up">
          
            <!-- Main content -->
            <div class="content">

                <div class="row justify-content-center">
 <div class="card mt-4  card-info card-outline">
        <form action="" method="get">
          {{ csrf_field() }}
          <div class="card-body row">
           
            <div class="col-7 col-lg-offset-2">
              <label for="matkul_id">Matkul</label>
                 <select class="form-control"  id="matkul_id" name="matkul_id" required>
                 <option  value=""> Pilih Matkul</option>
                 @foreach($matkuls as $matkul)
                 <option value="{{ $matkul->id }}" {{$matkul_id == $matkul->id ? 'selected' : ''}}>{{ $matkul->matkul }}</option>
                 @endforeach
                 </select>
              <div>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Filter</button>
              </div>
            </div>
          </div>
        </form>
      </div>

                    <div class="card mt-4 card-info card-outline">
                        <div class="card-header">Rekap</div>

                        <div class="card-body  p-5" style="min-height: 500px;">
                            <div class="form-group row ">
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr >
                                        <th rowspan="2">NIM</th>
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">Mata Kuliah</th>
                                        <th rowspan="2">Nama Dosen</th>
                                        <th colspan="3">Pertemuan</th>
                                        <th rowspan="2">Nilai A</th>
                                        <th rowspan="2">Surat</th>
                                        <th colspan="3">Pertemuan</th>
                                        <th rowspan="2">Nilai B</th>
                                        <th rowspan="2">Total A+B</th>
                                        <th rowspan="2">Surat</th>
                                        <th colspan="3">Pertemuan</th>
                                        <th rowspan="2">Nilai C</th>
                                        <th rowspan="2">Total A+B+C</th>
                                        <th rowspan="2">Surat</th>
                                        <th colspan="3">Pertemuan</th>
                                        <th rowspan="2">Nilai D</th>
                                        <th rowspan="2">Total A+B+C+D</th>
                                        <th rowspan="2">Surat</th>
                                        <th colspan="2">Pertemuan</th>
                                        <th rowspan="2">Nilai E</th>
                                        <th rowspan="2">Total A+B+C+D+E</th>
                                        <th rowspan="2">Surat</th>
                                    </tr>
                                    <tr style="white-space: nowrap !important;">
                                        <th class="text-center">1</th>
                                        <th class="text-center">2</th>
                                        <th class="text-center">3</th>

                                        <th class="text-center">4</th>
                                        <th class="text-center">5</th>
                                        <th class="text-center">6</th>
                                        <th class="text-center">7</th>
                                        <th class="text-center">8</th>
                                        <th class="text-center">9</th>
                                        <th class="text-center">10</th>
                                        <th class="text-center">11</th>
                                        <th class="text-center">12</th>
                                        <th class="text-center">13</th>
                                        <th class="text-center">14</th>
                                    </tr>

                                    @if($matkul_id == null)
                                        <tr>
                                            
                                            <th colspan="10">Data Tidak ditemukan.</th>
                                        </tr>
                                    @endif
                                    @if(!count($krs))
                                        <tr>
                                            
                                            <th colspan="10">Data Tidak ditemukan.</th>
                                        </tr>
                                    @endif
                                    @foreach ($krs as $item)


                                    @php 
                                                $a1 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 1)->first();
                                                $a2 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 2)->first();
                                                $a3 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 3)->first();
                                                $a4 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 4)->first();
                                                $a5 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 5)->first();
                                                $a6 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 6)->first();
                                                $a7 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 7)->first();
                                                $a8 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 8)->first();
                                                $a9 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 9)->first();
                                                $a10 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 10)->first();
                                                $a11 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 11)->first();
                                                $a12 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 12)->first();
                                                $a13 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 13)->first();
                                                $a14 = $absensi->where('user_id', $item->user_id)
                                                                ->where('pertemuan_id', 14)->first();
                                            @endphp
                                    <tr style="white-space: nowrap !important;">
                                        <td>{{ $item->user->nim }}</td>
                                        <td>{{ $item->user->nama }}</td>
                                        <td>{{ $item->matkul->matkul}}</td>
                                        <td>{{ $item->matkul->dosen->namadosen }}</td>


                                        <td>
                                            @if($a1)

                                                       @if($a1->keterangan==0)
                                                       -
                                                        @elseif($a1->keterangan==1)
                                                        HADIR 
                                                        @elseif($a1->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a1->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a1->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a1->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a1->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a1->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a1->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n1 = $subkriteria->where('kode_ket', $a1->keterangan)
                                                                ->first();
                                                $nilai1 = 0;               
                                                if($n1) {
                                                    $nilai1 = ($n1->point * $n1->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai1 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>
                                        <td>
                                            @if($a2)

                                                       @if($a2->keterangan==0)
                                                        -
                                                        @elseif($a2->keterangan==1)
                                                        HADIR 
                                                        @elseif($a2->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a2->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a2->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a2->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a2->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a2->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a2->keterangan==8)
                                                        ALFA
                                                        @endif

                                            @php
                                                $n2 = $subkriteria->where('kode_ket', $a2->keterangan)
                                                                ->first();
                                                $nilai2 = 0;               
                                                if($n2) {
                                                    $nilai2 = ($n2->point * $n2->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai2 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>
                                        <td>
                                            @if($a3)

                                                       @if($a3->keterangan==0)
                                                        -
                                                        @elseif($a3->keterangan==1)
                                                        HADIR 
                                                        @elseif($a3->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a3->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a3->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a3->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a3->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a3->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a3->keterangan==8)
                                                        ALFA
                                                        @endif

                                                        @php
                                                $n3 = $subkriteria->where('kode_ket', $a3->keterangan)
                                                                ->first();
                                                $nilai3 = 0;               
                                                if($n3) {
                                                    $nilai3 = ($n3->point * $n3->bobot);
                                                }
                                            @endphp
                                            @else 
                                                @php 
                                                    $nilai3 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>
                                          <td>
                                            {{ $nilai1 + $nilai2 + $nilai3 }}
                                          </td>
                                           <td>
                                               @php
                                                $nilaia = $nilai1 + $nilai2 + $nilai3;

                                                $surat1 = $surats->where('min_nilai', '<=', $nilaia)
                                                                 ->where('maks_nilai', '>=' ,$nilaia)
                                                                 ->first();

                                               @endphp

                                               @if($surat1) 
                                                    {{$surat1->nama_surat}}

                                                    <a href="{{url('smart/cetak?user_id='.$item->user_id.'&surat_id='.$surat1->id)}}" target="_blank" class="btn btn-primary btn-xs">Cetak</a> 
                                                @else
                                                    -
                                                @endif

                                           </td>
                                            <td>
                                            @if($a4)

                                                       @if($a4->keterangan==0)
                                                       -
                                                        @elseif($a4->keterangan==1)
                                                        HADIR 
                                                        @elseif($a4->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a4->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a4->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a4->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a4->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a4->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a4->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n4 = $subkriteria->where('kode_ket', $a4->keterangan)
                                                                ->first();
                                                $nilai4 = 0;               
                                                if($n4) {
                                                    $nilai4 = ($n4->point * $n4->bobot);
                                                }
                                            @endphp

                                            @else 
                                               @php 
                                                    $nilai4 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td> 
                                          <td>
                                            @if($a5)

                                                       @if($a5->keterangan==0)
                                                       -
                                                        @elseif($a5->keterangan==1)
                                                        HADIR 
                                                        @elseif($a5->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a5->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a5->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a5->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a5->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a5->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a5->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n5 = $subkriteria->where('kode_ket', $a5->keterangan)
                                                                ->first();
                                                $nilai5 = 0;               
                                                if($n5) {
                                                    $nilai5 = ($n5->point * $n5->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai5 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>
                                          <td>
                                            @if($a6)

                                                       @if($a6->keterangan==0)
                                                       -
                                                        @elseif($a6->keterangan==1)
                                                        HADIR 
                                                        @elseif($a6->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a6->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a6->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a6->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a6->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a6->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a6->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n6 = $subkriteria->where('kode_ket', $a6->keterangan)
                                                                ->first();
                                                $nilai6 = 0;               
                                                if($n6) {
                                                    $nilai6 = ($n6->point * $n6->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai6 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>

                                          <td>
                                            {{ $nilai4 + $nilai5 + $nilai6 }}
                                          </td>
                                          <td>
                                            {{ $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 }}
                                          </td>
                                           <td>
                                                @php
                                                $nilaib = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6;

                                                $surat2 = $surats->where('min_nilai', '<=', $nilaib)
                                                                 ->where('maks_nilai', '>=' ,$nilaib)
                                                                 ->first();

                                               @endphp

                                               @if($surat2) 
                                                    {{$surat2->nama_surat}}
                                                     <a href="{{url('smart/cetak?user_id='.$item->user_id.'&surat_id='.$surat2->id)}}" target="_blank" class="btn btn-primary btn-xs">Cetak</a> 
                                                @else
                                                    -
                                                @endif

                                           </td>
                                            <td>
                                            @if($a7)

                                                       @if($a7->keterangan==0)
                                                       -
                                                        @elseif($a7->keterangan==1)
                                                        HADIR 
                                                        @elseif($a7->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a7->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a7->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a7->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a7->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a7->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a7->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n7 = $subkriteria->where('kode_ket', $a7->keterangan)
                                                                ->first();
                                                $nilai7 = 0;               
                                                if($n7) {
                                                    $nilai7 = ($n7->point * $n7->bobot);
                                                }
                                            @endphp

                                            @else 
                                               @php 
                                                    $nilai7 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td> 
                                          <td>
                                            @if($a8)

                                                       @if($a8->keterangan==0)
                                                       -
                                                        @elseif($a8->keterangan==1)
                                                        HADIR 
                                                        @elseif($a8->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a8->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a8->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a8->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a8->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a8->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a8->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n8 = $subkriteria->where('kode_ket', $a8->keterangan)
                                                                ->first();
                                                $nilai8 = 0;               
                                                if($n8) {
                                                    $nilai8 = ($n8->point * $n8->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai8 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>
                                          <td>
                                            @if($a9)

                                                       @if($a9->keterangan==0)
                                                       -
                                                        @elseif($a9->keterangan==1)
                                                        HADIR 
                                                        @elseif($a9->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a9->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a9->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a9->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a9->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a9->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a9->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n9 = $subkriteria->where('kode_ket', $a9->keterangan)
                                                                ->first();
                                                $nilai9 = 0;               
                                                if($n9) {
                                                    $nilai9 = ($n9->point * $n9->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai9 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>

                                          <td>
                                            {{ $nilai7 + $nilai8 + $nilai9 }}
                                          </td>
                                          <td>
                                            {{ $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 }}
                                          </td>
                                           <td>
                                             @php
                                                $nilaic = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9;

                                                $surat3 = $surats->where('min_nilai', '<=', $nilaic)
                                                                 ->where('maks_nilai', '>=' ,$nilaic)
                                                                 ->first();

                                               @endphp

                                               @if($surat3) 
                                                    {{$surat3->nama_surat}}
                                                     <a href="{{url('smart/cetak?user_id='.$item->user_id.'&surat_id='.$surat3->id)}}" target="_blank" class="btn btn-primary btn-xs">Cetak</a> 
                                                @else
                                                    -
                                                @endif
                                           </td>
                                            <td>
                                            @if($a10)

                                                       @if($a10->keterangan==0)
                                                       -
                                                        @elseif($a10->keterangan==1)
                                                        HADIR 
                                                        @elseif($a10->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a10->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a10->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a10->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a10->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a10->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a10->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n10 = $subkriteria->where('kode_ket', $a10->keterangan)
                                                                ->first();
                                                $nilai10 = 0;               
                                                if($n10) {
                                                    $nilai10 = ($n10->point * $n10->bobot);
                                                }
                                            @endphp

                                            @else 
                                               @php 
                                                    $nilai10 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td> 
                                          <td>
                                            @if($a11)

                                                       @if($a11->keterangan==0)
                                                       -
                                                        @elseif($a11->keterangan==1)
                                                        HADIR 
                                                        @elseif($a11->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a11->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a11->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a11->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a11->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a11->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a11->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n11 = $subkriteria->where('kode_ket', $a11->keterangan)
                                                                ->first();
                                                $nilai11 = 0;               
                                                if($n11) {
                                                    $nilai11 = ($n11->point * $n11->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai11 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>
                                          <td>
                                            @if($a12)

                                                       @if($a12->keterangan==0)
                                                       -
                                                        @elseif($a12->keterangan==1)
                                                        HADIR 
                                                        @elseif($a12->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a12->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a12->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a12->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a12->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a12->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a12->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n12 = $subkriteria->where('kode_ket', $a12->keterangan)
                                                                ->first();
                                                $nilai12 = 0;               
                                                if($n12) {
                                                    $nilai12 = ($n12->point * $n12->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai12 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>

                                          <td>
                                            {{ $nilai10 + $nilai11 + $nilai12 }}
                                          </td>
                                          <td>
                                            {{ $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 }}
                                          </td>
                                           <td>
                                            @php
                                                $nilaid = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12;

                                                $surat4 = $surats->where('min_nilai', '<=', $nilaid)
                                                                 ->where('maks_nilai', '>=' ,$nilaid)
                                                                 ->first();

                                               @endphp

                                               @if($surat4) 
                                                    {{$surat4->nama_surat}}

                                                     <a href="{{url('smart/cetak?user_id='.$item->user_id.'&surat_id='.$surat4->id)}}" target="_blank" class="btn btn-primary btn-xs">Cetak</a> 
                                                @else
                                                    -
                                                @endif</td>
                                          <td>
                                            @if($a13)

                                                       @if($a13->keterangan==0)
                                                       -
                                                        @elseif($a13->keterangan==1)
                                                        HADIR 
                                                        @elseif($a13->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a13->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a13->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a13->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a13->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a13->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a13->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n13 = $subkriteria->where('kode_ket', $a13->keterangan)
                                                                ->first();
                                                $nilai13 = 0;               
                                                if($n13) {
                                                    $nilai13 = ($n13->point * $n13->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai13 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>
                                          <td>
                                            @if($a14)

                                                       @if($a14->keterangan==0)
                                                       -
                                                        @elseif($a14->keterangan==1)
                                                        HADIR 
                                                        @elseif($a14->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a14->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a14->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a14->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a14->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a14->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a14->keterangan==8)
                                                        ALFA
                                                        @endif


                                            @php
                                                $n14 = $subkriteria->where('kode_ket', $a14->keterangan)
                                                                ->first();
                                                $nilai14 = 0;               
                                                if($n14) {
                                                    $nilai14 = ($n14->point * $n14->bobot);
                                                }
                                            @endphp

                                            @else 
                                                @php 
                                                    $nilai14 = 0;
                                                @endphp
                                            @endif

                                          
                                          </td>

                                          <td>
                                            {{ $nilai13 + $nilai14 }}
                                          </td>
                                          <td>
                                            {{ $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14}}
                                          </td>
                                           <td>@php
                                                $nilaie = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12 + $nilai13 + $nilai14;

                                                $surat5 = $surats->where('min_nilai', '<=', $nilaie)
                                                                 ->where('maks_nilai', '>=' ,$nilaie)
                                                                 ->first();

                                               @endphp

                                               @if($surat5) 
                                                    {{$surat5->nama_surat}}

                                                     <a href="{{url('smart/cetak?user_id='.$item->user_id.'&surat_id='.$surat5->id)}}" target="_blank" class="btn btn-primary btn-xs">Cetak</a> 
                                                @else
                                                    -
                                                @endif</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
          
                            </div>
                        </div><!-- /.container-fluid -->
          
                    </div>
                </div>
          
            </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('Template.script')

</body>

</html>