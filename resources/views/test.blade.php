<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Mata Kuliah</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 360px;">
        <form action="{{ url('update-dosen') }}" method="POST">
            {{ csrf_field() }}
            <div class="content">
                <div class="card card-info card-outline">
                <div class="card-header">
                </div>

              <div class="card-body">

                <pre>

                Dosen      : {{ $dosen->namadosen }}            
                NIP     : {{ $dosen->nip}}
                NIDN      : {{ $dosen->nidn}}

                </pre>
              </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>