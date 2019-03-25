@extends('layouts.appEn')

@section('content')


<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
       <div class="text-center">
        <img src="{{asset('images/icons/icon-one.png')}}" alt="">
        <h2>About us</h2>
        <p>ST-Line company offers its own attachments for off-road vehicles and trucks:  bumper protection, thresholds, roll bars, corners, luggage racks and other products</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#aboutus" role="button">Watch more &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <div class="text-center">
       <img src="{{asset('images/icons/icon-two.png')}}" alt="">
        <h2>Services</h2>
        <p>Our company is looking for cars to develop stainless steel products on them</p>
        <p>Contact us</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#service" role="button">Watch more &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <div class="text-center">
        <img src="{{asset('images/icons/icon-three.png')}}" alt="">
        <h2>For partners</h2>
        <p>Become a partner of the company and earn with us</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#forpartners" role="button">Watch more &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><a name="aboutus"></a>About us ST-line<hr><span class="text-muted">Here you will find a wide range of auto accessories at the lowest price from the manufacturer.  Retail sales of attachments are available for all models and brands of cars presented on the site.</span></h2>
      </div>
      <div class="col-md-5">
              <div class="jumbotron jumbotron-fluid"style="
    background: lightskyblue; border-radius: 10px;" >
       <h3 class=" text-muted text-center">How to buy auto accessories?</h3>
       <div class="row">
       <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <ol class="ol-1 text-muted">
            <li class="li-1">You choose </ li>
            <li class = "li-1"> We advise </ li>
            <li class = "li-1"> You order </ li>
            <li class = "li-1"> We deliver </ li>
            <li class = "li-1"> You are paying </ li>
        </ol>
      </div>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading"><a name="service"></a>Services for our clients <hr> <span class = "text-muted">
              <ul class = "list-group list-group-flush">
              <li class = "list-group-item"> Design and manufacture of exclusive stainless steel products for your car on order </ li>
              <li class = "list-group-item"> Creating customized product designs </ li>
              <li class = "list-group-item"> Modeling designs for any model range of cars </ li>
              <li class = "list-group-item"> Installation services for our products on your car </ li>
              <li class = "list-group-item"> Technical support and advice from qualified installers of our products </ li>
            <ul class="list-group list-group-flush"></ul>
        </ul></span></h2>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="img-thumbnail" src="{{asset('images/about-content/serv.jpg')}}" width="500"   alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading" ><a name="forpartners"></a>Partner offers <hr> <span class = "text-muted"> <ul class = "list-group list-group-flush">
          <li class = "list-group-item"> The company offers the lowest prices for dealers </ li>
          <li class = "list-group-item"> Wholesalers do not need to keep their warehouse </ li>
          <li class = "list-group-item"> Convenient working conditions for dropshipping online stores -> direct deliveries to the consumer (customer of your store) from our warehouses, including  cash on delivery </ li>
          <li class = "list-group-item"> No minimum order by sum or number of items, order from 1st unit, prompt delivery of order </ li>
        </ul></span></h2>
      </div>
      <div class="col-md-5">
        <img class="img-thumbnail" src="{{asset('images/about-content/partn.jpg')}}"    alt="">
      </div>
    </div>


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection