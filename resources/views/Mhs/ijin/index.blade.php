
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>FORM IJIN</title>
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
        <section class="content">
          <div class="container-fluid">
              <div class="card card-primary card-outline">
                  <div class="card-header">
                      <h3>Form Ijin</h3>
                  </div>
                  <!-- Kolom1 -->
                  <div class="card-body">
                      <form action="/simpan-ijin" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label for="exampleInputJudul1">Mata Kuliah</label>
                              <select class="form-control" id="matkul_id" name="matkul_id" placeholder="Mata Kuliah">
                                <option hidden>Pilih Mata Kuliah</option>
                               <option disabled value> Pilih Mata Kuliah</option>
                                @foreach($datamatkul as $item)
                                <option value="{{ $item->matkul_id }}">{{ $item->matkul->matkul }} ({{ $item->matkul->dosen->namadosen}})</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputJudul1">Pertemuan</label>
                            <select class="form-control" id="pertemuan_id" name="pertemuan_id" placeholder="Pertemuan">
                              <option hidden>Pilih Pertemuan</option>
                             <option disabled value> Pilih Pertemuan</option>
                             @foreach($pertemuan_id as $item)
                             <option value="{{ $item->id }}">{{ $item->pertemuan }}</option>
                             @endforeach
                          </select>
                          </div>
                          <!-- Kolom2 -->
                          <div class="form-group">
                              <label for="exampleInputFile">Dokumen</label>
                              <div class="form-group row">
                                   <div class="col-sm-4">
                                     <input type="file" class="form-control form-control-sm" name="dokumen">
                                   </div>
                               </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Upload</button>

                      </form>
                  </div>
              </div>
      </section>
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
