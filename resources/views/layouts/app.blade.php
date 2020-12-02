<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>{{ config('app.name', 'Infracciones') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')}}">
    
    
     <!--Select2-->
    
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
 
    <!--Fin de Select2-->
    

<!--     <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert/sweetalert.css')}}">

    <!-- jQuery -->
    
    
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- DataTables -->
    <!-- <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>  -->

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
    
    <!--Select2-->
    
    <script src="{{ asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
 
    <!--Fin de Select2-->
    
    <script src="{{ asset('plugins/sweetalert/sweetalert.min.js')}}"></script>
    
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>

    <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dist/js/demo.js')}}"></script>

</head>
    
<body class="hold-transition skin-black-light sidebar-mini sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="color:#999999; font-weight: bold">
      <li class="nav-item">
          <a href="{{ asset('/home')}}"" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
      </li>
    </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Inicio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->username }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Catálogos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agentes</p>
                </a>
              </li>       
              
               <li class="nav-item">
               <a href="{{ asset('cat_turnos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Turnos</p>
                </a>
              </li>
              
              <li class="nav-item">
               <a href="{{ asset('cat_gruas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gruas</p>
                </a>
              </li>
              
                <li class="nav-item">
               <a href="{{ asset('cat_marcas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marcas</p>
                </a>
              </li>
              
                 <li class="nav-item">
               <a href="{{ asset('cat_multas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Infracciones</p>
                </a>
              </li>
              
              <li class="nav-item">
               <a href="{{ asset('cat_retenciones')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Retenciones</p>
                </a>
              </li>
              
              <li class="nav-item">
               <a href="{{ asset('cat_transportes')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipos de vehiculo</p>
                </a>
              </li>
              
              <li class="nav-item">
               <a href="{{ asset('cat_licencias')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Licencias</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt  nav-icon"></i>
                  <p>Cerrar Sesión</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid"> 
        <div class="row mb-2">
                <div class="col-sm-12">
                    <td class="breadcrumb float-sm-right">
                         
                        <a class="breadcrumb float-sm-left breadcrumb-item"><strong>Bienvenido(a):  </strong></a>
                         <a  class="breadcrumb float-sm-left breadcrumb-item" href="{{url (('/users/'.Auth::user()->slug))}}"> {{ Auth::user()->username }}</a>
                        </td>
                </div> 
      </div> 
    </div>

    <div class="content">
      <div class="container-fluid">
        <div id="app">
            <div class="row d-flex justify-content-center">
                <div class=" login-box ">
                    <div class="col-10 col-sm-10 mx-auto text-center">
                        <div class="login-logo">
                            <img class="text-center" src="{{ asset('img/movilidad-cp.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
  <footer class="main-footer text-center">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <strong>Municipio de Acapulco de Juárez</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->




</body>

</html>
