@extends('layout.default')

@section('title')
  Add User
@endsection
@section('content')
<section class="content">
  <div class="card card-primary">
    @include('user.form')
    <!-- /.card-header -->
    
  </div>


  </section>
  @endsection
  @section('datatable_css')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  @endsection

  @section('datatable')
      <!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
  @endsection