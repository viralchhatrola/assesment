<!-- form start -->
<form role="form" method="POST" action="{{url('users')}}">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
    <input type="name" name="name" value = "{{old('name')}}" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
    </div>
    @if($errors->has('name'))
    <div class="error">{{ $errors->first('name') }}</div><div class="row"> </div>
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" value = "{{old('email')}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    @if($errors->has('email'))
    <div class="error">{{ $errors->first('email') }}</div><div class="row"> </div>
    @endif
    <div class="form-group">
      <label>Select Role</label>
      <select name = "role" class="form-control">
      @foreach ($roles as $role)
      <option value='{{$role->id}}' {{old('role') == $role->id ? 'selected' : ''}}>{{$role->name}} </option>
      @endforeach
      </select>
    </div>
    @if($errors->has('role'))
    <div class="error">{{ $errors->first('role') }}</div><div class="row"> </div>
    @endif
   
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>