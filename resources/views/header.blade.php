<?php
use App\Http\Controllers\ProductController ;
$total=0;
if(Session::has('user')){
  $total=ProductController::cartItem();
}




?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
<!--     <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">E-COM</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Orders</a>
        </li>
        
        
      </ul>
      <form action="/search" class="d-flex">
        <input class="form-control me-2 search-box" name="query" type="search"   placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <ul class="nav navbar-nav navbar-right">

<li><a href="#">Card({{$total}}) </a></li> 

@if(Session::has('user'))
<li>{{Session::get('user')['name']}} </li>
      <li><a class="nav-link active" aria-current="page" href="/logout">logout</a> </li> 
     
       

@else
<li><a href="/login">login </a></li>
@endif
    </ul>
  </div>
</nav>