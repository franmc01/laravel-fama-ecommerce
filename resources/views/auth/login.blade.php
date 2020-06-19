<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Distribuidora Fama | Login </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
</head>
<body class="hold-transition login-page" style="background-image: url('/img/fondo.jpg');">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card" style="height: 350px">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
          <img src="{{ asset('/img/lo1go.png') }}"  height="70px" style="padding-right: 30px">
          <p class="text-center" style="color:gray; font-weight:bold">Administración</p>
      </p>

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email" placeholder="Ingrese el email">
            @error('email')
                {{ $message }}</label>
            @enderror

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingrese la contraseña">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong class="text-red">{{ $message }}</strong>
            </span>
        @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-6 text-center">
            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
          </div>
          <div class="col-md-3"></div>
        </div>
      </form>

      <p class="mb-1">
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/adminlte.js') }}"></script>

</body>
</html>
