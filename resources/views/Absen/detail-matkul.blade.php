
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
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Mata Kuliah</h3>
          </div>
    
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 360px;">
              <form action="{{ url('update-matkul') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="content">
                      <div class="card card-info card-outline">
                      <div class="card-header">
                      </div>
    
                    <div class="card-body d-flex align-items-center justify-content-center">
    
                        <table class = "container-fluid">
                          <tr>
                            <td style = "width: 30%;">Tahun Ajar</td>
                            <td style = "width: 5%;">:</td>
                            <td style = "width: 50%;">{{ $Matkul->Tahun ->tahun }} ({{ $Matkul->Tahun ->keterangan }})  </td>
                          {{-- Dosen      : {{ $dosen->namadosen }}      --}}
                        </tr>      
                        <tr>
                          <td style = "width: 30  %;">Mata Kuliah</td>
                          <td style = "width: 5%;">:</td>
                          <td style = "width: 50%;">{{ $Matkul->matkul }}</td>
                        </tr>   
                        <tr>
                          <td style = "width: 30%;">Nama Dosen</td>
                          <td style = "width: 5%;">:</td>
                          <td style = "width: 50%;">{{ $Matkul->Dosen ->namadosen }}</td>
                        </tr>   
                        <tr>
                          <td style = "width: 30%;">SKS</td>
                          <td style = "width: 5%;">:</td>
                          <td style = "width: 50%;">{{ $Matkul->sks }}</td>
                        </tr> 
          
                          </table>
                    </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
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