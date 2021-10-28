@extends('master')
@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
      @foreach($products as $item)
    <li data-target="#demo" data-slide-to="{{$item['id']}}" class="{{$item['id']==1?'active':''}}"></li>
        @endforeach
  </ol>

  <!-- The slideshow -->
  <div class="carousel-inner">
      @foreach ($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}} ">
    <a href="detail/{{$item['id']}}">
      <img class="slider-img" src="{{$item['gallery']}}" >
      <div class="carousel-caption carousel-style">
    <h3>{{$item['name']}}</h3>
    <p>{{$item['description']}}</p>
        </div>
</a>
    </div>      
    @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="trending-wrapper">
<h1>Trending Products</h1>
<div class=container>
      @foreach ($products as $item)
    <div class="trending-img">
    <a href="detail/{{$item['id']}}">
      <img class="t-img" src="{{$item['gallery']}}" >
      <h5>{{$item['name']}}</h5>
</a>
</div>
      
    @endforeach
 </div>
 
</div>
@endsection