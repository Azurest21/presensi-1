
<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
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
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="card" data-aos="fade-up">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3>SUBKRITERIA SMART</h3>
                  <div class="card-tools">
                      {{-- <a href="{{ route('tambah-subkriteria') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a> --}}
                      <div class="input-group input-group-sm" style="width: 720px;">
                    </div>
                  </div>
                </div>
      
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 360px;">
                    <table class="table table-bordered">
                      <tr class=>
                        <th>Subkriteria</th>
                        <th>Point</th>
                        <th>Bobot</th>
                        <th>Tindakan</th>
                      </tr>  
                      @foreach($Subkriteria as $item )
                      <tr>
                          <td>{{$item->subkriteria}}</td>
                          <td>{{$item->point}}</td>
                          <td>{{$item->bobot}}</td>
                            <td>
                              <a href="{{ url('edit-subkriteria',$item->id) }}"><i class="ri-edit-box-line"></i></a>
      
                              <a href="{{ url('hapus-subkriteria',$item->id) }}"onclick="return confirm('Are you sure you want to delete this item?');"><i class="ri-delete-bin-line" style="color: red"></i></a>
                            </td>
                      </tr>
                      @endforeach
                    </table>
                </div>  
      
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      
          <!-- /.row -->
        </div><!-- /.container-fluid -->
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

    @include('sweetalert::alert')
</body>
</html>