@extends('layouts.appEn')

@section('content')

<div class="bd-example">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" >
     <div class="text-center">
         <img src="{{asset('images/slides/slide-one.jpg')}}" alt="" style="max-width:1680px; width:100%;max-height: 500px;">
         <title>Placeholder</title><rect fill="#777" width="100%" height="100%" /><text fill="#555" dy=".3em" x="50%" y="50%">First slide</text>
     </div>
    </div>
    <div class="carousel-item">
       <div class="text-center">
        <img src="{{asset('images/slides/slide-two.jpg')}}" alt="" style="max-width: 1450px; max-height: 500px;">
      <title>Placeholder</title><rect fill="#666" width="100%" height="100%" /><text fill="#444" dy=".3em" x="50%" y="50%">Second slide</text>
    </div>
    </div>
    <div class="carousel-item">
     <div class="text-center">
      <img src="{{asset('images/slides/slide-three.jpg')}}" alt="" style="max-width: 1680px; max-height: 500px;">
      <title>Placeholder</title><rect fill="#555" width="100%" height="100%" /><text fill="#333" dy=".3em" x="50%" y="50%">Third slide</text>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<section class="jumbotron text-center">
    <div class="container">
        <h2 class="text-muted">We are glad that you visited our site</h2>
        <h2 class="jumbotron-heading text-muted">ST-line company - manufacturer of stainless steel automotive accessories</h2>
        <hr>
      <h3 class="text-muted">Here you will find a wide range of protective products for the car at the lowest price from the manufacturer</h3>
      <hr>
    <div class="row">
      <div class="col-md-4">
         <img src="{{asset('images/main-content/main-one.jpg')}}" class="card-img-top" alt="...">
        </div>
         <div class="col-md-4">
         <img src="{{asset('images/main-content/main-two.jpg')}}" class="card-img-top" alt="...">
        </div> <div class="col-md-4">
         <img src="{{asset('images/main-content/main-three.jpg')}}" class="card-img-top" alt="...">
        </div>
    </div>
     <hr>
      <h3 class=" text-muted">We offer high-quality material, the possibility of individual orders, a large selection of product models</h3>
      <hr>
       <h2 class=" text-muted">A unique opportunity to earn money without investing the initial capital is provided to our dealers and partners !!!</h2>
    </div>
  </section>
@endsection