@extends('layouts.app')

@section('content')

<div class="bd-example">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
     <div class="text-center">
         <img src="{{asset('images/slides/slide-one.jpg')}}" alt="" style="max-width: 1450px; max-height: 500px;">
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
      <img src="{{asset('images/slides/slide-three.jpg')}}" alt="" style="max-width: 1450px; max-height: 500px;">
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
        <h3 class="text-muted">Мы благодарны, что вы посетили наш сайт</h3>
        <h3 class="jumbotron-heading text-muted">Компания ST-line - производитель автмобильных акссесуаров из нержавеющей стали</h3>
        <hr>
      <h4 class="text-muted">Здесь вы найдете широкий ассортимент защитных изделий для автомобиля по самой низкой цене от производителя</h4>
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
      <h4 class=" text-muted">Предлагаем качественный материал, возможность индивидуальных заказов, большой выбор моделей изделий</h4>
      <hr>
       <h3 class=" text-muted">Уникальная возможность заработка без вложения первоначального капитала предоставляется нашим дилерам и партнерам!!!</h3>
    </div>
  </section>
@endsection