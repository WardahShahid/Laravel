@extends('layout')
@section('content')
<div clas="col-sm-6">
    <h1>User Registeration</h1>
    
    <form method="POST" action="register">
        @csrf
  <div class="form-group">
    <label >Name</label>

      <input type="text" name="name" class="form-control" placeholder="Enter name"/>
  </div>

  <div class="form-group">
    <label>Email</label>
    
      <input type="text" name="email" class="form-control" placeholder="Enter email"/>
  </div>

  <div class="form-group">
    <label >Password</label>
    
      <input type="text" name="password" class="form-control" placeholder="Enter password"/>
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>

</div>
@endsection