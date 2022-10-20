
<!DOCTYPE html>
<html lang="en">

<head>
  @include('Template.head1')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">REKAP PRESENSI MAHASISWA<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      @include('Template.navbar1')
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
          
            <!-- Main content -->
            <div class="content">
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header">Rekap Data</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="label">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="label">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            <div class="form-group">
                                    <label for="matkul_id">Mata Kuliah</label>
                                    <select class="form-control"  id="matkul_id" name="matkul_id" placeholder="Mata Kuliah">
                                        <option hidden>Pilih Mata Kuliah</option>
                                       <option disabled value> Pilih Mata Kuliah</option>
                                        @foreach($datamatkul as $item)
                                        <option value="{{ $item->id }}">{{ $item->matkul }} ({{ $item->dosen->namadosen}})</option>
                                        @endforeach
                                    </select>
                            </div>
                            
                            <div class="form-group">
                                <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value +
                            '/' + document.getElementById('matkul_id').value " class="btn btn-primary col-md-12">
                                    Rekap <i class="fas fa-print"></i>
                                </a>
                            </div>
                            <div class="form-group row ">
                                <table border="2">
                                    <tr class="container fluid">
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Mata Kuliah</th>
                                        <th>Nama Dosen</th>
                                        <th>Pertemuan</th>
                                        <th>Tanggal</th>
                                        <th>Masuk</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    @foreach ($Absensi as $item)
                                    
                                    <tr>
                                        <td>{{ $item->user->nim }}</td>
                                        <td>{{ $item->user->nama }}</td>
                                        <td>{{ $item->matkul->matkul }}</td>
                                        <td>{{ $item->matkul->dosen->namadosen }}</td>
                                        <td>{{ $item->pertemuan->pertemuan }}</td>
                                        <td>{{ $item->tgl }}</td>
                                        <td>{{ $item->jammasuk }}</td>
                                        <td>@if($item->keterangan==0)
                                            Pending
                                            @elseif($item->keterangan==1)
                                            Hadir
                                            @elseif($item->keterangan==2)
                                            Tidak Hadir
                                            @elseif($item->keterangan==3)
                                            Ijin
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
          
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