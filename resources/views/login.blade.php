@extends('layout')
@section('content')
<div>
    <h1>Login</h1>

    <form method="POST" action="login">
        @csrf

  <div class="form-group">
    <label>Email</label>
    
      <input type="text" name="email" class="form-control" placeholder="Enter email"/>
  </div>

  <div class="form-group">
    <label >Password</label>
    
      <input type="text" name="password" class="form-control" placeholder="Enter password"/>
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
@endsection