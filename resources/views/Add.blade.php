@extends('layout')
@section('content')
<div class="col-sm-6">
    <h1>Add New Restaurant</h1>

    <form method="POST" action="add">
        @csrf
  <div class="form-group">
    <label >Restaurant Name</label>

      <input type="text" name="name" class="form-control" placeholder="Name"/>
  </div>

  <div class="form-group">
    <label >Email</label>
    
      <input type="text" name="email" class="form-control" placeholder="Enter Email"/>
  </div>

  <div class="form-group">
    <label >Address</label>
    
      <input type="text" name="address" class="form-control" placeholder="Enter address"/>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

</div>
@endsection