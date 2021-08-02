@extends('master')
@section('content')
<div class="container custom-product">

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      
      
      @foreach($products as $item)
    
      <div class="carousel-item  {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
        <div class="carousel-caption slider-text">
          <h5>{{$item['name']}}</h5>
         
          <p>{{$item['description']}}</p>
         
        </div>
</a>
    
      </div>
        @endforeach
      
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="trending-warpper">
<h3>trending warpper Products</h3>
@foreach($products as $item)
<div class="trending-item">
<a href="detail/{{$item['id']}}">
        <img class="trending-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
        <div class="">
          <h5>{{$item['name']}}</h5>
         
        </div>
</a>
        </div>
         @endforeach
</div>






</div>
@endsection