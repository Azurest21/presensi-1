
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
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{ route('data-dosen') }}">
            <i class="ri-calendar-check-fill"></i>
            <h3><a href="">Data Dosen</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{ route('data-matkul') }}">
            <i class="ri-database-line"></i>
            <h3>Data Mata Kuliah</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{ route('filter-data') }}">
            <i class="ri-database-2-line"></i>
            <h3>Rekap Presensi</a></h3>
          </div>
        </div>
        @endif
        @if (auth()->user()->level == "mahasiswa")
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{ route('krs') }}">
            <i class="ri-calendar-check-line"></i>
            <h3>KRS</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{ route('absen-masuk') }}">
            <i class="ri-calendar-check-line"></i>
            <h3>Presensi</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{ route('ijin') }}">
            <i class="ri-hospital-line"></i>
            <h3>Ijin</a></h3>
          </div>
        </div>
        @endif
        @if (auth()->user()->level == "dosen")
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{route('mulai.index')}}">
            <i class="ri-timer-2-line"></i>
            <h3>Mulai Presensi</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{route('valpresensi')}}">
            <i class="ri-checkbox-circle-line"></i>
            <h3>Validasi Presensi</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="{{ route('filter-data') }}">
            <i class="ri-database-2-line"></i>
            <h3>Rekap Presensi</a></h3>
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

</html>