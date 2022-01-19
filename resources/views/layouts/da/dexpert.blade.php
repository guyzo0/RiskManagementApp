<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Expert | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('danal/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('danal/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('danal/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('danal/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('danal/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('danal/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('danal/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('danal/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
    <li class="nav-item d-none d-sm-inline-block">
        <a id="expertDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::guard('expert')->user()->name }} (EXPERT) <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="expertDropdown">
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::guard('expert')->user()->name }}: EXPERT</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Validation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('risque_direction')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Direction validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_departement')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Departement validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_division')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Division validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_equipement')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipement validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_module')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Module validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_carte')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carte validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_port')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Port Validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_activite')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activite validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_personne')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personne validation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('risque_processus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Processus validation</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Database Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('direction')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Direction DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('departement')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Departement DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('division')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Division DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('equipement')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipement DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('module')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Module DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('carte')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carte DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('port')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Port DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('activite')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activite DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('personne')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personne DB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('processus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Processus DB</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                connaitre l'etat du risque
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listRisque_direction')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Direction etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_departement')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Departement etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_division')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Division etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_equipement')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipement etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_module')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Module etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_carte')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carte etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_port')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Port etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_activite')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activite etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_personne')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personne etat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listRisque_processus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>processus etat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Detail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dir')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Direction detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dep')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Depatement detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('div')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Division detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('equ')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipement detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mod')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Module detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('car')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carte detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('por')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Port detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('act')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activite detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('per')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personne detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('pro')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Processus detail</p>
                </a>
              </li>
            </ul>
          </li>
         
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
            <h1 class="m-0 text-dark">Expert Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Risque: 0 a 15<sup style="font-size: 20px">%</sup></h3>

                <p>Gravite = 1: toleree</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Risque: 15 a 25<sup style="font-size: 20px">%</sup></h3>

                <p>Gravite = 2: toleree</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Risque: 25 a 70<sup style="font-size: 20px">%</sup></h3>

                <p>Gravite = 3: inadmissible</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Risque: 70 a 100<sup style="font-size: 20px">%</sup></h3>

                <p>Gravite = 4: insupportable</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Etat
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                  </div>  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            </section>
                
          <section class="col-lg-7 connectedSortable">
          <!-- Calendar -->
          <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="">nexttel.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('danal/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('danal/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('danal/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('danal/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('danal/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('danal/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('danal/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('danal/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('danal/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('danal/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('danal/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('danal/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('danal/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('danal/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('danal/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('danal/dist/js/demo.js')}}"></script>
</body>
</html>
