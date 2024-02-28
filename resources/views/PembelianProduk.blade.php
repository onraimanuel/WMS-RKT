@extends('Header.Header')

@section('title','Pembelian Produk - WMS')

@section('container')
<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pembelian Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{url('/')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Pembelian Produk</li>
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
                <h3 class="card-title" >Data Pembelian Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Purchase Order</th>
                    <th>Nama Produk</th>
                    <th>Nama Toko</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>001</td>
                    <td>Kripik</td>
                    <td>Bramstam</td>
                    <td>1</td>
                    <td>
                    <select class="form-select" name="status">
                        <option value="Perlu Dikirim">Perlu Dikirim</option>
                        <option value="Perlu Diambil">Perlu Diambil</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                    </td>
                    <td>
                        <a href="#">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>002</td>
                    <td>Kripik</td>
                    <td>Bramstam</td>
                    <td>1</td>
                    <td>
                    <select class="form-select" name="status">
                        <option value="Perlu Dikirim">Perlu Dikirim</option>
                        <option value="Perlu Diambil">Perlu Diambil</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                    </td>
                    <td>
                        <a href="#">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>003</td>
                    <td>Kripik</td>
                    <td>Bramstam</td>
                    <td>1</td>
                    <td>
                    <select class="form-select" name="status">
                        <option value="Perlu Dikirim">Perlu Dikirim</option>
                        <option value="Perlu Diambil">Perlu Diambil</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                    </td>
                    <td>
                        <a href="#">Detail</a>
                    </td>
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