@extends('Header.Header')

@section('title','Produk Toko - WMS')

@section('container')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produk Toko</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{url('/')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Produk Toko</li>
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
                <h3 class="card-title" >Data Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>No</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Kategori Produk</th>
                    <th>Spesifikasi Produk</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Expired</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>aaaa</td>
                    <td>2</td>
                    <td>PCS</td>
                    <td>Keripik</td>
                    <td>20 Maret 2023</td>
                    <td>20 April 2023</td>
                    <td>
                        <button class="btn btn-primary" type="button" onclick="window.location.href='#'"> 
                            <i class="fas fa-pen nav-icon"></i>
                            Edit
                        </button>
                        <button class="btn btn-danger" type="button" onclick="window.location.href='#'"> 
                            <i class="fas fa-trash nav-icon"></i> 
                            Hapus
                        </button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>aaaa</td>
                    <td>2</td>
                    <td>PCS</td>
                    <td>Keripik</td>
                    <td>20 Maret 2023</td>
                    <td>20 April 2023</td>
                     <td>
                        <button class="btn btn-primary" type="button" onclick="window.location.href='#'"> 
                            <i class="fas fa-pen nav-icon"></i>
                             Edit
                        </button>
                        <button class="btn btn-danger" type="button" onclick="window.location.href='#'"> 
                            <i class="fas fa-trash nav-icon"></i> 
                             Hapus
                        </button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>aaaa</td>
                    <td>2</td>
                    <td>PCS</td>
                    <td>Keripik</td>
                    <td>20 Maret 2023</td>
                    <td>20 April 2023</td>
                    <td>
                        <button class="btn btn-primary" type="button" onclick="window.location.href='#'"> 
                            <i class="fas fa-pen nav-icon"></i>
                            Edit
                        </button>
                        <button class="btn btn-danger" type="button" onclick="window.location.href='#'"> 
                            <i class="fas fa-trash nav-icon"></i> 
                            Hapus
                        </button>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <br>
                <div class="float-right">
                  <button type="button" class="btn btn-block bg-gradient-primary btn-sm ">Tambah Produk</button>
                </div>
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
<!-- AdminLTE App -->
<script src="Asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Asset/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
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