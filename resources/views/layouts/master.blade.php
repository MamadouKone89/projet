<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Chaine | Administrative</title>
<!-- Font Awesome Icons -->

  <!-- Theme style -->
  
  <!-- Theme style -->
 

  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
 <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/min/dropzone.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css')}}">
   <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css')}}">
 <link rel="stylesheet" href="{{ asset('css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
   <link rel="stylesheet" href="{{ asset('css/icon.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link"></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          
          <span class="text-sm"><strong>{{ Auth::user()->name }}</strong></span>
        </a>
        
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 " style="background-color: #870913;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/img/Logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-4"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Minstère de la Justice</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Administration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link ">
                <i class="fas fa-user"></i>
                  <p>Utilisateur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.roles.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ ('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Déconnexion
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       
       @yield('content')

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
  <footer class="main-footer" style="background-color: f73f0d;">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://www.justice.gov.bf">DSI Ministère de la Justice</a>.</strong> Tous droits réservés.
  </footer>
</div>


<!-- Bootstrap 4 -->

<!-- AdminLTE App -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>


<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE App -->

<script src="{{ asset('js/adminlte.min.js') }}"></script>
<script src="{{ asset('js/ionicons.min.js') }}"></script>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/popper.min.js') }}"></script>
 <script src="{{ asset('js/coreui.min.js') }}"></script>
 <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
 <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
 <script src="{{ asset('js/pdfmake.min.js') }}"></script>
 <script src="{{ asset('js/vfs_fonts.js') }}"></script>
 <script src="{{ asset('js/jszip.min.js') }}"></script>
 <script src="{{ asset('js/dataTables.select.min.js') }}"></script>
 <script src="{{ asset('js/ckeditor.js') }}"></script>
 <script src="{{ asset('js/moment.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
 <script src="{{ asset('js/select2.full.min.js') }}"></script>
 <script src="{{ asset('js/min/dropzone.min.js') }}"></script>
</body>
</html>
