<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="Asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="Asset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Asset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="Asset/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="Asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="Asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="Asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/js/tempusdominus-bootstrap-4.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/css/tempusdominus-bootstrap-4.min.css" crossorigin="anonymous" />

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @yield('container')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="Asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WMS - RKT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="Asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('/')}}" class="d-block">Onra Imanuel</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">DASHBOARD</li>
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Warehouse
              </p>
            </a>
          </li>
          <li class="nav-header">STOK</li>
          <li class="nav-item">
            <a href="{{url('/ProdukToko')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Produk Toko</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/PembelianProduk')}}" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>Pembelian Produk</p>
            </a>
          </li>
          <li class="nav-header">LAPORAN</li>
          <li class="nav-item">
            <a href="{{url('/LaporanPemesanan')}}" class="nav-link">
              <i class="fas fa-file nav-icon"></i>
              <p>Laporan Pemesanan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/LaporanStok')}}" class="nav-link">
              <i class="fas fa-book nav-icon"></i>
              <p>Laporan Stok</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- jQuery -->
<script src="Asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="Asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="Asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="Asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="Asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="Asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="Asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Asset/plugins/moment/moment.min.js"></script>
<script src="Asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="Asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="Asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="Asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Asset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Asset/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Asset/dist/js/pages/dashboard.js"></script>

<!-- DataTables  & Plugins -->
<script src="Asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="Asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="Asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="Asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="Asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="Asset/plugins/jszip/jszip.min.js"></script>
<script src="Asset/plugins/pdfmake/pdfmake.min.js"></script>
<script src="Asset/plugins/pdfmake/vfs_fonts.js"></script>
<script src="Asset/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="Asset/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="Asset/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


</body>
</html>
