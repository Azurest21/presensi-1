<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>LAPORAN</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

  <!-- Untuk load bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 }

</style>
 <style>
body {
  background-color: #999;
   -webkit-print-color-adjust:exact !important;
  print-color-adjust:exact !important;
}
    @page { size: A4 }
* {
  font-family: "Arial";
}
.text-center {
  text-align: center;
}
h1 {
  font-size: 20px;
}
h3 {
  font-size: 14px;
  font-weight: normal;
  margin-top: -8px;
}
h4 {
  margin-top: 20px;
  text-transform: uppercase;
  margin-bottom: -10px;
}
td {
  padding: 5px !important;
  text-align: center;
  vertical-align: middle !important;
 /* border-color: #fff !important;
  padding: 5px !important;*/
  /*text-transform: capitalize;*/
}
</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 ">
 <?php
 //menampung input date start dan end dari index tadi
         
  ?>
  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">
    <img src="https://umbjm.ac.id/wp-content/uploads/2016/05/logo-19-12-tanpa-bayang-1.png" style="width: 50px;float: left;margin-right: 10px;"  class="text-center">
    <h1 class="text-center" style="margin-bottom: 0px;">Universitas Muhammadiyah Banjarmasin</h1>
    <p class="text-center" style="margin-bottom: 0px;">Jl. Gubernur Syarkawi, Semangat Dalam, Kec. Alalak, Kabupaten Barito Kuala, Kalimantan Selatan 70581</p>
    <hr>

    <h5 class="text-center text-uppercase text-decoration-underline mt-4">{{$surat->nama_surat}}</h5> 
    <br>
    <p style="text-align:justify;">{{$surat->isi_surat}}</p>
    <table class="table table-bordered table-hover mt-4">
          <thead>
            <tr >
              <th class="bg-primary text-light">NIM</th>
              <th>{{$user->nim}}</th>
            </tr>
            <tr >
              <th class="bg-primary text-light">NAMA</th>
              <th>{{$user->nama}}</th>
            </tr>
          </thead>
        </table>
    <p style="text-align:justify;">Demikian {{$surat->nama_surat}} ini kami informasikan, sekian dan terimakasih.</p>
<br>

<table style="width: 200px;font-size: 11px;float:right;margin-top: 60px;">
                    <tr>
                      <th colspan="2">Banjarmasin, {{date('Y-m-d')}}</th>
                    </tr>
                    <tr style="height: 100px;">
                      <td style="width: 50%">
                        
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span style="text-decoration: underline;">Rektor</span>
                        <br>
                      </td>
                    </tr>
                </table>
  </section>
</body>
</html>
