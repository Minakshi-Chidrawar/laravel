@extends('master.layout')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 carousel-img" src="{{ asset('images/Mataji.png') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-img" src="{{ asset('images/Mataji1.png') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-img" src="{{ asset('images/Mataji2.png') }}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carousel-img" src="{{ asset('images/Mataji3.png') }}" alt="Third slide">
    </div>    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@extends('master.footer')