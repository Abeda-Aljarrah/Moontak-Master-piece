<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard| Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <div style="display: flex; justify-content: center; align-items: center;">


        {{-- <img src="{{ asset('assets/img/logo.png') }}" alt="" width="50px"> --}}
    </div>

      <p class="login-box-msg">Sign in to start your session</p>
      @if(Session::has('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{ Session::get('fail') }}</div>
      @endif

      <form action="{{ route('dashlog') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name" name="name">
          <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
              </div>
          </div>
          @error('name')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
      </div>

        <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" name="email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary btn-block">Sign In</button>

      </form>


      </div>
      <!-- /.social-auth-links -->

      {{-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> --}}
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE App -->
<script type="text/javascript" src="{{ URL::asset('assets/js/adminlte.min.js') }}"></script>


</body>
</html>
