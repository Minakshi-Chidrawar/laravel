@extends('master.layout')

@section('content')
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item carousel-img active">
      <img src="{{ asset('images/Mataji.png') }}" alt="Los Angeles">
    </div>
    <div class="carousel-item carousel-img">
      <img src="{{ asset('images/Mataji1.png') }}" alt="Chicago">
    </div>
    <div class="carousel-item carousel-img">
      <img src="{{ asset('images/Mataji2.png') }}" alt="New York">
    </div>
    <div class="carousel-item carousel-img">
      <img src="{{ asset('images/Mataji3.png') }}" alt="New York">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
@endsection