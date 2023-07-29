
<!DOCTYPE html>
<html lang="en">

<head>
  @include('Template.head1')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{ route('home') }}">VALIDASI PRESENSI<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      @include('Template.navbar1')
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="" style="overflow-y: scroll !important;">
    <div class="container" data-aos="fade-up">
          
            <!-- Main content -->
            <div class="content">

                <div class="row justify-content-center">
 <div class="card mt-4  card-info card-outline">
        <form action="" method="get">
          {{ csrf_field() }}
          <div class="card-body row">
           
            <div class="col-7 col-lg-offset-2">
              <label for="matkul_id">Matkul</label>
                 <select class="form-control"  id="matkul_id" name="matkul_id" required>
                 <option  value=""> Pilih Matkul</option>
                 @foreach($matkuls as $matkul)
                 <option value="{{ $matkul->id }}" {{$matkul_id == $matkul->id ? 'selected' : ''}}>{{ $matkul->matkul }}</option>
                 @endforeach
                 </select>
              <label for="matkul_id">Pertemuan</label>
              <select class="form-control"  id="pertemuan_id" name="pertemuan_id" required>
                <option  value=""> Pilih Pertemuan</option>
                @foreach($pertemuans as $pertemuan)
                <option value="{{ $pertemuan->id }}" {{$pertemuan_id == $pertemuan->id ? 'selected' : ''}}>{{ $pertemuan->pertemuan }}</option>
                @endforeach
                </select>
              <div>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Filter</button>
              </div>
            </div>
          </div>
        </form>
      </div>

                    <div class="card mt-4 card-info card-outline">
                        <div class="card-header">Validasi Presensi</div>

                        <div class="card-body table-responsive p-5" style="min-height: 500px;">
                            <div class="form-group row ">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Mata Kuliah</th>
                                        <th>Nama Dosen</th>
                                        <th>Pertemuan</th>
                                        <th>Tanggal Masuk</th>
                                        <th>File</th>
                                        <th>Keterangan</th>
                                        <th>Tindakan</th>
                                    </tr>

                                    @if($matkul_id == null)
                                        <tr>
                                            
                                            <th colspan="10">Data Tidak ditemukan.</th>
                                        </tr>
                                    @endif
                                    @foreach ($krs as $item)


                                    @php 
                                                $a = $absensi->where('user_id', $item->user_id)->first();
                                            @endphp
                                    <tr>
                                        <td>{{ $item->user->nim }}</td>
                                        <td>{{ $item->user->nama }}</td>
                                        <td>{{ $item->matkul->matkul}}</td>
                                        <td>{{ $item->matkul->dosen->namadosen }}</td>


                                        <td>
                                            
                                            @if($a)
                                                {{$a->pertemuan->pertemuan}}
                                            @endif
                                        </td>


                                        <td>
                                            @if($a)
                                                 {{ $a->tgl }}
                                            @endif
                                          

                                        </td>
                                        <td>
                                     

                                             @if($a)
                                                    @if($a->file)
                                                      <a href="dokumen/{{$a->file}}" target="_blank"><i class="ri-folder-4-fill"></i></a>
                                                    @endif
                                            @endif
                                        </td>
                                        <td>
                                            @if($a)

                                                       @if($a->keterangan==0)
                                                        Pending
                                                        @elseif($a->keterangan==1)
                                                        HADIR 
                                                        @elseif($a->keterangan==2)
                                                        SAKIT DENGAN SURAT DOKTER
                                                        @elseif($a->keterangan==3)
                                                        SAKIT TANPA SURAT DOKTER
                                                        @elseif($a->keterangan==4)
                                                        SAKIT TANPA KETERANGAN
                                                        @elseif($a->keterangan==5)
                                                        IJIN DENGAN SURAT DISPEN
                                                        @elseif($a->keterangan==6)
                                                        IJIN DENGAN FOTO KEGIATAN
                                                        @elseif($a->keterangan==7)
                                                        IJIN TANPA KETERANGAN
                                                        @elseif($a->keterangan==8)
                                                        ALFA
                                                        @endif
                                            @endif

                                          
                                          </td>
                                          <td>


                                            @if(!$mulai) 
                                                Pertemuan belum dimulai.
                                            @else

                                            @if($a)


                                                @if($a->keterangan==0)
                                                    <a href="/valpresensi/{{$a->id}}/hadir"
                                                    class="btn btn-primary">HADIR</a>
                                                    @endif
                                                    @if($a->keterangan==0)
                                                    <a href="/valpresensi/{{$a->id}}/sakit"
                                                    class="btn btn-primary">SAKIT DENGAN SURAT DOKTER</a>
                                                    @endif
                                                    @if($a->keterangan==0)
                                                    <a href="/valpresensi/{{$a->id}}/sakit2"
                                                    class="btn btn-primary">SAKIT TANPA SURAT DOKTER</a>
                                                    @endif
                                                    @if($a->keterangan==0)
                                                    <a href="/valpresensi/{{$a->id}}/sakit3"
                                                    class="btn btn-primary">SAKIT TANPA KETERANGAN</a>
                                                    @endif
                                                    @if($a->keterangan==0)
                                                    <a href="/valpresensi/{{$a->id}}/ijin"
                                                    class="btn btn-primary">IJIN DENGAN SURAT DISPEN</a>
                                                    @endif
                                                    @if($a->keterangan==0)
                                                    <a href="/valpresensi/{{$a->id}}/ijin2"
                                                    class="btn btn-primary">IJIN DENGAN FOTO KEGIATAN</a>
                                                    @endif
                                                    @if($a->keterangan==0)
                                                    <a href="/valpresensi/{{$a->id}}/ijin3"
                                                    class="btn btn-primary">IJIN TANPA KETERANGAN</a>
                                                    @endif

                                            @endif
                                            
                                                @if(!$a)

                                                 
                                                    <a href="/valpresensi/alfa?user_id={{$item->user_id}}&matkul_id={{$item->matkul_id}}&pertemuan_id={{$pertemuan_id}}"
                                                    class="btn btn-danger">ALFA</a>
                                                  

                                                @endif



                                            @endif


                                          </td>  
                                    </tr>
                                    @endforeach
                                </table>
          
                            </div>
                        </div><!-- /.container-fluid -->
          
                    </div>
                </div>
          
            </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('Template.script')

</body>

</html>