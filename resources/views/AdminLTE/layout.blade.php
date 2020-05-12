<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Distribuidora Fama | Sistema</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/select2-bootstrap4.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

</head>

<body class="sidebar-mini layout-fixed control-sidebar-slide-open text-sm">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark tex-sm">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('/img/user8.jpg') }}" class="user-image img-circle elevation-2" alt="User Image">
            <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <li class="user-header bg-dark">
              <img src="{{ asset('/img/user8.jpg') }}" class="img-circle elevation-2" alt="User Image">
              <p> {{ auth()->user()->name }} - Administrador
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <a href="{{ route('inicio.tienda') }}" class="btn btn-default btn-flat">Ir a la tienda</a>
                <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  <input type="submit" value="logout" style="display: none;">
                </form>
              </li>
          </ul>
        </li>
      </ul>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-warning elevation-1">

        <a href="{{ route('inicio.tienda') }}" class="brand-link">
            <img src="{{ asset('/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light"><span style="padding-left:15px"></span> Distribuidora Fama</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('/img/user8.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>

                <div class="info">
                    <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                </div>
            </div>
            <nav class="mt-2">
                @include('AdminLTE.sidebar')
            </nav>
        </div>

    </aside>

    <div class="content-wrapper">
      <div class="content-header">
        @yield('header')
      </div>
      <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
      </div>
    </div>

    <footer class="main-footer text-sm">
      <div class="float-right d-none d-sm-inline"> Version 1.0.1 </div>
      <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> <a href="">Francisco Marin</a>.</strong>Todos los derechos reservados.
    </footer>

  </div>

  <!-- REQUIRED SCRIPTS -->
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/js/piexif.min.js') }}"></script>
  <script src="{{ asset('/js/sortable.min.js') }}"></script>
  <script src="{{ asset('/js/purify.min.js') }}"></script>
  <script src="{{ asset('/js/popper.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/js/fileinput.min.js') }}"></script>
  <script src="{{ asset('/js/theme.min.js') }}"></script>
  <script src="{{ asset('/js/moment.min.js') }}"></script>
  <script src="{{ asset('/js/daterangepicker.js') }}"></script>
  <script src="{{ asset('/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <script src="{{ asset('/js/summernote-bs4.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.overlayScrollbars.min.js') }}"></script>
  <script src="{{ asset('/js/adminlte.js') }}"></script>
  <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('/js/myscript.js') }}"></script>

</body>

</html>
