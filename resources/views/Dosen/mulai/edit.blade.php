
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Edit Mulai</title>
    @include('Template.head1')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">Mulai<span>.</span></a></h1>
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
        <form action="{{ route('mulai.update',$data->id) }}" method="post">
              {{ csrf_field() }}
        {{ method_field('put') }}
          <div class="card-body row">
            <div class="col-5 text-center d-flex align-items-center justify-content-center">
              <div class="">
                <p class="lead mb-8"><strong>EDIT MULAI</strong></p>
              </div>
            </div>
             <div class="col-7 align-items-center justify-content-center">
              <label for="matkul_id">Matkul</label>
                 <select class="form-control"  id="matkul_id" name="matkul_id" request>
                 <option  value=""> Pilih Matkul</option>
                 @foreach($matkuls as $matkul)
                 <option value="{{ $matkul->id }}" {{($matkul->kode == $data->matkul_id ? 'selected' : '')}}>{{ $matkul->matkul }}</option>
                 @endforeach
                 </select>
              <label for="matkul_id">Pertemuan</label>
              <select class="form-control"  id="pertemuan_id" name="pertemuan_id" required>
                <option  value=""> Pilih Pertemuan</option>
                @foreach($pertemuans as $pertemuan)
                <option value="{{ $pertemuan->id }}" {{($pertemuan->id == $data->pertemuan_id ? 'selected' : '')}}>{{ $pertemuan->pertemuan }}</option>
                @endforeach
                </select>
              <div class="form-group">
                  <label for="start_time">Waktu Start</label>
                  <input type="time"  name="start_time" class="form-control" value="{{$data->start_time}}" placeholder="start_time">
              </div>
              <div class="form-group">
                  <label for="end_time">Waktu End</label>
                  <input type="time"  name="end_time" class="form-control" value="{{$data->end_time}}" placeholder="end_time">
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
