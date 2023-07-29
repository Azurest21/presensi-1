
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Edit LATLONG HAVERSINE</title>
    @include('Template.head1')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" 
    crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <link rel="stylesheet"href="https://unpkg.com/leaflet-geosearch@3.8.0/dist/geosearch.css"/>
    <script src="https://unpkg.com/leaflet-geosearch@3.8.0/dist/geosearch.umd.js"></script>
    <style>
      #map { height: 300px; }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">LATLONG HAVERSINE<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      @include('template.navbar1')
    </div>
  </header><!-- End Header -->

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="col-5" data-aos="fade-up">
        <div id="map"></div>
        <form style="margin: 5px" action="{{ url('updatehaversine') }}" method="POST">
          {{ csrf_field() }}
          <div class>
            <div class="form-group">
              <label for="matkul" style="color: rgb(218, 219, 220)">Latitude</label>
              <input type="text" id="latitude" name="latitude" class="form-control" value="{{$haversine->latitude}}">
            </div>
              <div class="form-group">
              <label for="matkul" style="color: rgb(218, 219, 220)">Longitude</label>
              <input type="text" id="longitude" name="longitude" class="form-control" value="{{$haversine->longitude}}">
            </div>
              <div class="form-group">
              <label for="matkul" style="color: rgb(218, 219, 220)">Distance (Meter)</label>
              <input type="number" min="0" id="distance" name="distance" class="form-control" value="{{$haversine->distance}}">
            </div>
            <div class="d-flex align-items-center justify-content-center">
              <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>  
          <div>
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
<script>
  // you want to get it of the window global
  const providerOSM = new GeoSearch.OpenStreetMapProvider();

  //leaflet map
  var leafletMap = L.map('map', {
  fullscreenControl: true,
  // OR
  fullscreenControl: {
      pseudoFullscreen: false // if true, fullscreen to page width and height
  },
  minZoom: 2
  }).setView([-3.24872,114.63], 17);

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(leafletMap);
  
  let theMarker = {};

  leafletMap.on('click',function(e) {
      let latitude  = e.latlng.lat.toString().substring(0,15);
      let longitude = e.latlng.lng.toString().substring(0,15);
      document.getElementById("latitude").value = latitude;
      document.getElementById("longitude").value = longitude;
      let popup = L.popup()
          .setLatLng([latitude,longitude])
          .setContent("Kordinat : " + latitude +" - "+  longitude )
          .openOn(leafletMap);

      if (theMarker != undefined) {
          leafletMap.removeLayer(theMarker);
      };
      theMarker = L.marker([latitude,longitude]).addTo(leafletMap);  
  });
  
  const search = new GeoSearch.GeoSearchControl({
      provider: providerOSM,
      style: 'bar',
      searchLabel: 'Sinjai',
  });

  leafletMap.addControl(search);
</script>