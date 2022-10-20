
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="card" data-aos="fade-up">
        <form action="{{ url('update-matkul',$Matkul->id) }}" method="POST">
          {{ csrf_field() }}
          <div class="card-body row">
            <div class="col-5 text-center d-flex align-items-center justify-content-center">
              <div class="">
                <p class="lead mb-8"><strong>EDIT MATA KULIAH</strong></p>
              </div>
            </div>
            <div class="col-7 align-items-center justify-content-center">
              <label for="matkul_id">Tahun Ajar</label>
                 <select class="form-control"  id="tahun_id" name="tahun_id" placeholder="Tahun Ajar">
                 <option hidden>Pilih Tahun Ajar</option>
                 <option disabled value> Pilih Keterangan</option>
                 @foreach($tahun as $item)
                 <option value="{{ $item->id }}">{{ $item->tahun }} ({{ $item->keterangan}})</option>
                 @endforeach
                 </select>
              <div class="form-group">
                <label for="matkul">MATA KULIAH</label>
                <input type="text" id="matkul" name="matkul" class="form-control" placeholder="Mata Kuliah">
              </div>
              <label for="matkul_id">Dosen</label>
              <select class="form-control"  id="dosen_nidn" name="dosen_nidn" placeholder="Nama Dosen">
                <option hidden>Pilih Dosen</option>
                <option disabled value> Pilih Dosen</option>
                @foreach($dosen as $item)
                <option value="{{ $item->nidn }}">{{ $item->namadosen }}</option>
                @endforeach
                </select>
              <div class="form-group">
                  <label for="sks">JUMLAH SKS</label>
                  <input type="text" id="sks" name="sks" class="form-control" placeholder="Jumlah SKS">
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
  </div>
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
