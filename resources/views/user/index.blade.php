@extends('layout.default')

@section('title')
  Add User  
@endsection
@section('content')
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users</h3>
        </div>
        <div>        <button type="button" onclick="window.location='{{url('/users/create/')}}'" class="btn btn-block btn-default">Add User</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>email</th>
              <th>Role</th>
            </tr>
            </thead>
            <tbody>
           
              @foreach ($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
               
              </tr>              
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Name</th>
              <th>email</th>
              <th>Role</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->


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