
<!DOCTYPE html>
<html>
<head>
  @include('Template.head1')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Absensi | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <!-- /.login-logo -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="card col-md-5" data-aos="fade-up">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Silahkan Login</p>
    
          <form action="{{ route('postlogin') }}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email">
              <div class="input-group-append">
                  <span class="fas fa-envelope"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                  <span class="fas fa-lock"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  
                </div>
              </div>
              <!-- /.col -->
              <div class>
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                <a href="{{ route('registrasi') }}" class="text-center">Daftar Baru</a>
              </div>
              <!-- /.col -->
            </div>
          </form>
          
        </div>
      
        </div>
        <!-- /.login-card-body -->

    </div>
  </section><!-- End Hero -->
<!-- /.login-box -->

<!-- jQuery -->
    @include('Template.script')

</body>
</html>
