
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   

    <title>Vikingos Gym</title>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
   
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
 
  
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css" rel="stylesheet">
    
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
    
<body   class="sidebar-light-dark sidebar-open" style="  height: auto;" >
    
    <!--hold-transition skin-black-light sidebar-mini sidebar-collapse-->
    <div class="wrapper" >

  <!-- Navbar -->
  <nav  class="main-header navbar navbar-expand navbar-orange navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="color:#693030; font-weight: bold">
     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        <li class="nav-item">
          
          <a href="{{ asset('/home')}}"" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
         
      </li>
    </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside  class="main-sidebar sidebar-light-yellow elevation-5" style=" background:linear-gradient(30deg, #FDBE21,#E57A08, #F1900B, #FBA711,#D26403 );">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div  class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/BeretaTeam6.png')}}" class="img-circle elevation-5" alt="User Image">
        </div>
        <div class="info">
            <a style="color: white" href="#" class="d-block">{{ Auth::user()->username }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav  class="mt-2" style="color: black;">
        <ul style="color: black;" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        

          <li class="nav-item has-treeview" style="color: black;">
            <a href="#" class="nav-link active"style="color: black;">
              <i class="nav-icon fas fa-dumbbell"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="color: black;">
              <li class="nav-item" style="color: black;">
                <a href="{{ asset('home')}}" class="nav-link"style="color: black;">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>       
              
               <li class="nav-item" style="color: black;">
               <a href="{{ asset('Clientes')}}" class="nav-link" style="color: black;">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              
              <li class="nav-item" style="color: black;">
               <a href="{{ asset('DatosPersonales')}}" class="nav-link" style="color: black;">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Datos Personales</p>
                </a>
              </li>
              
                <li class="nav-item"style="color: black;">
               <a href="{{ asset('Medidas')}}" class="nav-link" style="color: black;">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Medidas</p>
                </a>
              </li>
              
                 <li class="nav-item" style="color: black;">
               <a href="{{ asset('Plandealimentacion')}}" class="nav-link" style="color: black;">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Plan de alimentación</p>
                </a>
              </li>
              
              <li class="nav-item" style="color: black;">
               <a href="{{ asset('Galeria')}}" class="nav-link" style="color: black;">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Galeria</p>
                </a>
              </li>
              
              <li class="nav-item"style="color: black;">
               <a href="{{ asset('Informacion')}}" class="nav-link"style="color: black;">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Información</p>
                </a>
              </li>
              
            
              
            </ul>
          </li>
          
          

          <li  class="nav-item has-treeview"style="color: black;">
            <a href="#" class="nav-link active"style="color: black;">
              
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="color: black; display: none;">
              <li class="nav-item" style="color: black;">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: black;">
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
  <div  class="content-wrapper" style="background:linear-gradient(30deg, #FDBE21,#E57A08, #F1900B, #FBA711,#D26403 );">
    
    <div class="content-header">
      <div class="content">
       <div class="container-fluid">
        <div id="app">
            <div class="row d-flex justify-content-center">
                <div class=" login-box ">
                    <div class="col-10 col-sm-10 mx-auto text-center">
                        <div class="login-logo">
                            <img class="text-center" src="{{ asset('img/BeretaTeam6.png')}}" alt="">
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
  <aside style="color: black"class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Vikingos Gym</h5>
      
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->




</body>

</html>
