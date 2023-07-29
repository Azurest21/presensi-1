
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
<!--     <form action="/simpan-masuk" method="post" enctype="multipart/form-data"> -->
  <form  name="form" method="GET">
          @csrf
          <input type="hidden" name="latitude" id="latitude">
          <input type="hidden" name="longitude" id="longitude">
          <div class="card-body row justify-content-center">
            <div class="col-5 d-flex align-items-center justify-content-center">
              <div class="">
                <h2>Pilih Mata Kuliah</h2>
              </div>
            </div>
            <div class="form-group">
                <label for="matkul_id"><h2>Mata Kuliah</h2></label>
                <select class="form-control" id="matkul_id" name="matkul_id" required placeholder="Mata Kuliah">
              
                   <option  value=""> Pilih Mata Kuliah</option>
                    @foreach($datamatkul as $item)
                    <option value="{{ $item->matkul_id }}">{{ $item->matkul->matkul }} ({{ $item->matkul->dosen->namadosen}})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="pertemuan_id"><h2>Pertemuan</h2></label>
              <select class="form-control" id="pertemuan_id" required name="pertemuan_id" placeholder="Pertemuan">

                 <option value=""> Pilih Pertemuan</option>
                  @foreach($pertemuan_id as $item)
                  <option value="{{ $item->id }}">{{ $item->pertemuan }}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group">
                
              <label for=""><h2>Radius LatLong</h2></label>
               <input type="text" name="lokasi" id="lokasi" class="form-control" readonly>
            </div>
            
          </div>
          <center>
            <button type="button" id="find-me" class="btn btn-icon icon-right btn-info">Lanjut <i class="fas fa-arrow-right"></i></button>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>

/*  setTimeout(function(){
       $('#find-me').hide();},50000);*/


  document.getElementById("latitude").value = '';
  document.getElementById("longitude").value = '';


    function geoFindMe() {


  function success(position) {
    const latitude  = position.coords.latitude;
    const longitude = position.coords.longitude;


    document.getElementById("latitude").value = latitude;
      document.getElementById("longitude").value = longitude;

      if(document.getElementById("latitude").value != '') {
        var obj = null;
      


         var matkul_id = $("#matkul_id option:selected").val();
         var pertemuan_id = $("#pertemuan_id option:selected").val();
         if(matkul_id == '') {

                       swal('Oopss..', 'Isi Matkul!', 'warning');
           //  alert('Oopss.. Isi dulu kode karyawan.');
            return false;
         } else if(pertemuan_id == '') {
           
              swal('Oopss..', 'Isi dulu pertemuan', 'warning');
            return false;
         } else {
              $.ajax({
             url:"{{url('sethaversine')}}",
             method:"GET",
             data:{latitude:latitude,longitude:longitude},
              /*dataType: 'json',*/
             success: function(data) {
var obj = JSON.parse(data); 


   if(obj.radius != null) {


    if(obj.note == 'ok') {
            document.getElementById("lokasi").value = 'Radius : '+obj.radius;
  document.getElementById("lokasi").style.color = "green";
 swal({
      title: 'Apa anda sudah yakin?',
      text: 'Radius anda : '+ obj.radius+'M dari titik lokasi.',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

   $.ajax({
             url:'{{url("simpan-masuk")}}',
             type : 'GET', 
             data:{matkul_id:matkul_id,pertemuan_id:pertemuan_id},

             success: function(data) {
                var obj = JSON.parse(data); 
              
                swal({
                  text: obj.message,
                  title: obj.title,
                  icon: obj.status
              }).then(function() {
                  window.location = '{{url("absen-masuk")}}';
              })


            },
  error: function(xhr, textStatus, error){
      console.log(xhr.statusText);
      console.log(textStatus);
      console.log(error);
      alert(xhr.statusText + ' ' + textStatus + ' ' + error);
  }
       });

      } else {
          return false;
        swal('Batal melakukan absensi.');
      }
    });


} else {

        swal('Oops', 'Posisi anda diluar jangkauan! '+obj.radius+'M dari titik lokasi.' , 'warning');
}


} else {
  document.getElementById("lokasi").style.color = "#ff0000";
    document.getElementById("lokasi").value = 'Coba lagi... anda masih diluar area';
}

            },
       });


            /*if(obj != null) {
                        
            }   */           

         }
      }
  }

  function error() {
           swal('Oopss..', 'Izinkan lokasi gps dulu ya, ada dipengaturan browser kamu!', 'warning');
   // status.textContent = 'Oopss.. Izinkan lokasi gps dulu ya, ada dipengaturan browser kamu.';
  }

  if (!navigator.geolocation) {
          swal('Oopss..', 'Geolocation is not supported by your browser.', 'warning');
    //status.textContent = '';
  } else {
   // status.textContent = 'Locating…';

            document.getElementById("lokasi").value = 'Tunggu... validasi lokasi...';  
            document.getElementById("lokasi").style.color = "blue";
             var options = {timeout:60000};
    navigator.geolocation.getCurrentPosition(success, error, options);
  }

}

document.querySelector('#find-me').addEventListener('click', geoFindMe);
</script>
</body>
</html>
