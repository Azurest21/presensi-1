
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Tambah Surat</title>
    @include('Template.head1')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">Surat<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      @include('template.navbar1')
    </div>
  </header><!-- End Header -->

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="card" data-aos="fade-up">
        <form action="{{ url('update-surat',$data->id) }}" method="POST">
          {{ csrf_field() }}
          <div class="card-body row">
            <div class="col-10 text-center d-flex align-items-center justify-content-center">
                <div class="">
                  <p class="lead mb-8"><strong>EDIT Surat</strong></p>
                </div>
              </div>
              <div class="form-group" style="margin: 4px">
                <label for="nama_surat">Nama Surat</label>
                <input type="text" id="nama_surat" name="nama_surat" value="{{$data->nama_surat}}" class="form-control" placeholder="Masukkan nama surat">
              </div>
              <div class="form-group" style="margin: 4px">
                <label for="subkriteria">Min Nilai</label>
                <input type="number" id="elementThree" name="min_nilai" value="{{$data->min_nilai}}"  class="form-control"  placeholder="Masukan Minimal Nilai" >
              </div>
              <div class="form-group" style="margin: 4px">
                <label for="subkriteria">Maks. Nilai</label>
                <input type="text"  id="elementFour" name="maks_nilai" value="{{$data->maks_nilai}}"  class="form-control" placeholder="Masukan Maksimal nilai">
              </div>

              <div class="form-group" style="margin: 4px">
                <label for="subkriteria">Isi surat</label>
                <textarea class="form-control" name="isi_surat" required>{{$data->isi_surat}}</textarea>
              </div>

              
            </div>
              <button type="submit" class="btn btn-primary">Ubah Data</button>
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

    <script type="text/javascript">
      
const elementThree = document.getElementById("elementThree");

var lastValue = "";

elementThree.addEventListener("input", function (e) {
  var inputValue = e.target.value;
  var regex = /^\d+[,]?\d{0,2}$/;
  var result = regex.test(inputValue);

  if (result) {
    lastValue = inputValue;
    return (this.value = inputValue);
  } else if (!result && inputValue != "" && lastValue != "") {
    return (this.value = lastValue);
  } else if (!result) {
    lastValue = "";
    return (this.value = "");
  }
});

const elementFour = document.getElementById("elementFour");

var lastValuea = "";

elementFour.addEventListener("input", function (e) {
  var inputValuea = e.target.value;
  var regex = /^\d+[,]?\d{0,2}$/;
  var resulta = regex.test(inputValuea);

  if (resulta) {
    lastValuea = inputValuea;
    return (this.value = inputValuea);
  } else if (!resulta && inputValuea != "" && lastValuea != "") {
    return (this.value = lastValuea);
  } else if (!resulta) {
    lastValuea = "";
    return (this.value = "");
  }
});

    </script>
</body>
</html>
