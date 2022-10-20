
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Tambah MATA KULIAH</title>
    @include('Template.head1')
</head>
<body class="hold-transition sidebar-mini" onload="realtimeClock()">
<div class="wrapper">

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">Presensi Mahasiswa<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      @include('template.navbar1')
    </div>
  </header><!-- End Header -->

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="card-body" data-aos="fade-up">
    <form action="/absen-masuk/cek" method="post">
          @csrf
          <div class="card-body row justify-content-center">
            <div cl
            <!DOCTYPE html>
            <html lang="en">
            
            <head>
              @include('Template.head1')
            </head>
            
            <body>
            
              <!-- ======= Header ======= -->
              <header id="header" class="fixed-top ">
                <div class="container d-flex align-items-center justify-content-lg-between">
            
                  <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">PRESENSI MAHASISWA<span>.</span></a></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                  @include('Template.navbar1')
                </div>
              </header><!-- End Header -->
            
              <!-- ======= Hero Section ======= -->
              <section id="hero" class="d-flex align-items-center justify-content-center">
                <div class="container" data-aos="fade-up">
            
                  <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-xl-6 col-lg-8">
                      <h1>Aplikasi Presensi UMBJM<span>.</span></h1>
                      <h2>Solutions for Easy Attendance</h2>
                    </div>
                  </div>
            
                  @if (auth()->user()->level == "admin")
                  <div class="card-body table-responsive p-0" style="height: 360px;">
                    <div class="card-header">Absen Masuk</div>
                    <div class="card-body">
                        <form action="/simpan-masuk" method="post">
                            @csrf
                            
                            <input type="hidden" value="{{ $matkul_id }}" name="matkul_id">
                            <div class="form-group">
                                <label for="pertemuan">Pertemuan</label>
                               
                                <select class="form-control" id="pertemuan" name="pertemuan" placeholder="Pertemuan">
                                     <?php
                                    $i=1;
                                    for($i=$jumlah+1;$i<11;$i++) { ?>
                             
                                     <option value="{{ $i }}">{{ $i }}</option>
                                    <?php } ?> --}}
                                </select>

                            </div> 
                               
            
                                    <a href="/absen-masuk" >Kembali</a>
                               
                            <center>
                                
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                
                            </center>
                        </form>
                       
                    </div>
                </div>
            </div>
                    @endif
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
            
            </html>ass="col-5 d-flex align-items-center justify-content-center">
              <div class="">
                <h2>Pilih Pertemuan</h2>
              </div>
            </div>
            <input type="hidden" value="{{ $matkul_id }}" name="matkul_id">
            <div class="form-group">
              <label for="pertemuan">Pertemuan</label>
             
              <select class="form-control" id="pertemuan" name="pertemuan" placeholder="Pertemuan">
                   <?php
                  $i=1;
                  for($i=$jumlah+1;$i<11;$i++) { ?>
           
                   <option value="{{ $i }}">{{ $i }}</option>
                  <?php } ?> --}}
              </select>

          </div>
          </div>
          <center>
            <button type="submit" class="btn btn-primary">Pilih</button>
         </center>
      </form>
      </div>
    </section><!-- End Hero -->
    <!-- /.content-header -->

    <!-- Main content -->

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>
</html>
