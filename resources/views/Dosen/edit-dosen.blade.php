
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
<body class="hold-transition sidebar-mini">
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
      <div class="card" data-aos="fade-up">
        <form action="{{ url('update-dosen',$dosen->nidn) }}" method="POST">
          {{ csrf_field() }}
          <div class="card-body row">
            <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <div class="">
                  <p class="lead mb-8"><strong>EDIT DATA DOSEN</strong></p>
                </div>
              </div>
              <div class="col-7 align-items-center justify-content-center">
                <div class="form-group">
                  <label for="matkul">NAMA DOSEN</label>
                  <input type="text" id="namadosen" name="namadosen" class="form-control" placeholder="Nama Dosen">
                </div>
                <div class="form-group">
                    <label for="sks">NIP</label>
                    <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP">
                </div>
                <div class="form-group">
                  <label for="sks">NIDN</label>
                  <input type="text" id="nidn" name="nidn" class="form-control" placeholder="NIDN">
                </div>
              <div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
            </div>
          </div>
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
