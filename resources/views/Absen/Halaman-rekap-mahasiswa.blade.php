
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
          <h1>REKAP PRESENSI<span>.</span></h1>
        </div>
      </div>

      <div class="form-group">
        <h2>Tanggal Awal</h2>
        <input type="date" name="tglawal" id="tglawal" class="form-control" />
    </div>
    <div class="form-group">
        <h2>Tanggal Akhir</h2>
        <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
    </div>
    <div class="form-group">
            <h2>Mata Kuliah</h2>
            <select class="form-control"  id="matkul_id" name="matkul_id" placeholder="Mata Kuliah">
                <option hidden>Pilih Mata Kuliah</option>
               <option disabled value> Pilih Mata Kuliah</option>
                @foreach($datamatkul as $item)
                <option value="{{ $item->id }}">{{ $item->matkul }} ({{ $item->dosen->namadosen}})</option>
                @endforeach
            </select>
    </div>
    
    <div class="form-group ">
        <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
        '/' + document.getElementById('tglakhir').value +
        '/' + document.getElementById('matkul_id').value" class="btn btn-primary col-md-12">
            Rekap Data <i class="fas fa-print "></i>
        </a>
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