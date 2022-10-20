
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
    <form action="/simpan-masuk" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body row justify-content-center">
            <div class="col-5 d-flex align-items-center justify-content-center">
              <div class="">
                <h2>Pilih Mata Kuliah</h2>
              </div>
            </div>
            <div class="form-group">
                <label for="matkul_id"><h2>Mata Kuliah</h2></label>
                <select class="form-control" id="matkul_id" name="matkul_id" placeholder="Mata Kuliah">
                    <option hidden>Pilih Mata Kuliah</option>
                   <option disabled value> Pilih Mata Kuliah</option>
                    @foreach($datamatkul as $item)
                    <option value="{{ $item->matkul_id }}">{{ $item->matkul->matkul }} ({{ $item->matkul->dosen->namadosen}})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="pertemuan_id"><h2>Pertemuan</h2></label>
              <select class="form-control" id="pertemuan_id" name="pertemuan_id" placeholder="Pertemuan">
                  <option hidden>Pilih Pertemuan</option>
                 <option disabled value> Pilih Pertemuan</option>
                  @foreach($pertemuan_id as $item)
                  <option value="{{ $item->id }}">{{ $item->pertemuan }}</option>
                  @endforeach
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
      @include('sweetalert::alert')
</body>
</html>
