@extends('Header.Header')

@section('title','Laporan Pemesanan - WMS')
    <!-- Include Required Prerequisites
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css"/>  -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Asset/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="Asset/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="Asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="Asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="Asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="Asset/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="Asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="Asset/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="Asset/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="Asset/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Asset/dist/css/adminlte.min.css">

@section('container')

<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{url('/')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Laporan Pemesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title" >Laporan Pemesanan Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container">
                <div class="form-group">
                  <label>Tanggal:</label>
                  <div class="row">
                    <div class="col-md-4">
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" name="datefilter">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-info">Cari</button>
                    </div>
                  </div>
                    </div>
                  </div>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Purchase Order</th>
                    <th>Nama Produk</th>
                    <th>Nama Toko</th>
                    <th>Jumlah</th>
                    <th>Harga per Unit</th>
                    <th>Total Harga</th>
                    <th>Tanggal Pemesanan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>01</td>
                    <td>Sasagun Andaliman</td>
                    <td>Bramstam</td>
                    <td>1</td>
                    <td>10.000</td>
                    <td>10.000</td>
                    <td>26/11/2023</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>02</td>
                    <td>Sasagun Andaliman</td>
                    <td>Bramstam</td>
                    <td>1</td>
                    <td>10.000</td>
                    <td>10.000</td>
                    <td>26/11/2023</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>03</td>
                    <td>Sasagun Andaliman</td>
                    <td>Bramstam</td>
                    <td>1</td>
                    <td>10.000</td>
                    <td>10.000</td>
                    <td>26/11/2023</td>
                  </tr>

                  </tbody>
                </table>                                  
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- jQuery -->
<script src="Asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="Asset/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="Asset/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="Asset/plugins/moment/moment.min.js"></script>
<script src="Asset/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="Asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="Asset/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="Asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="Asset/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="Asset/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="Asset/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="Asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Asset/dist/js/demo.js"></script>
<!-- Page specific script -->
<script type="text/javascript">
 $(function() {
 
   $('input[name="datefilter"]').daterangepicker({
       autoUpdateInput: false,
       locale: {
           cancelLabel: 'Clear'
       }
   });
 
   $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
       $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
   });
 
   $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
       $(this).val('');
   });
 
 });
 </script>
 <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection