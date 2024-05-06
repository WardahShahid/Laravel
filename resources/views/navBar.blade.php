<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">My Restaurant</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="/list">List</a>
        <a class="nav-link" href="/add">Add</a>
       
    
        @if(Session::get('user'))
        <a class="nav-link" href="#">{{Session::get('user')}}</a>
        @else
        <a class="nav-link" href="/login">Login</a>
        <a class="nav-link" href="/register">Register</a>
        @endif

        
      </div>
    </div>
  </div>
</nav>
