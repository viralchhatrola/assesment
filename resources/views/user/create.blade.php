@extends('layout.default')

@section('title')
  Add User
@endsection
@section('content')
<section class="content">
  <div class="card card-primary">
    
    <!-- /.card-header -->
    <!-- form start -->
  <form role="form" method="POST" action="{{url('users')}}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label>Select Role</label>
          <select name = "role" class="form-control">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
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