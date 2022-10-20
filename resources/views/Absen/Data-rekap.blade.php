<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title> Rekap Absensi Mahasiswa</title>
    @include('Template.head1')

</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Rekap Absensi Mahasiswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Rekap Absensi Mahasiswa</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header">Lihat Data</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="label">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="label">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            sini tambahan fitur matkul
                            <div class="form-group " >
                                <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value + document.getElementById('matkul').value" class="btn btn-primary col-md-12">
                                    Lihat <i class="fas fa-print"></i>
                                </a>
                            </div>

                            <div class="form-group">
                                <table>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Mata Kuliah</th>
                                        <th>Nama Dosen</th>
                                        <th>Pertemuan</th>
                                        <th>Tanggal</th>
                                        <th>Masuk</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    @foreach ($Absensi as $item)
                                    <tr>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->user->nama }}</td>
                                        <td>{{ $item->matkul }}</td>
                                        <td>{{ $item->namadosen }}</td>
                                        <td>{{ $item->pertemuan_id }}</td>
                                        <td>{{ $item->tgl }}</td>
                                        <td>{{ $item->jammasuk }}</td>
                                        <td>@if($item->keterangan==0)
                                            Pending
                                            @elseif($item->keterangan==1)
                                            Hadir
                                            @elseif($item->keterangan==2)
                                            Tidak Hadir
                                            @endif
                                        </td>
                                        <td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            </div>
                        </div><!-- /.container-fluid -->

                    </div>
                </div>

            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('Template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
</body>
</html>
