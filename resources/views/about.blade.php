@extends('layouts.app')

@section('content')


<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
       <div class="text-center">
        <img src="{{asset('images/icons/icon-one.png')}}" alt="">
        <h2>О нас</h2>
        <p>Компания ST-Line предлагает навесное оборудование собственного производства для внедорожников и грузовых автомобилей: кенгурятники, пороги, ролл-бары, уголки, защиту бампера, багажники и другие изделия</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#aboutus" role="button">Смотреть подробнее &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <div class="text-center">
       <img src="{{asset('images/icons/icon-two.png')}}" alt="">
        <h2>Услуги</h2>
        <p>Наша компания ищет автомобили для разработки на них изделий из нержавеющей стали</p>
        <p>Свяжитесь с нами</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#service" role="button">Смотреть подробнее &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <div class="text-center">
        <img src="{{asset('images/icons/icon-three.png')}}" alt="">
        <h2>Партнерам</h2>
        <p>Станьте партнерами компании и зарабатывайте вместе с нами</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#forpartners" role="button">Смотреть подробнее &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><a name="aboutus"></a>О нас ST-line<hr></h2><h4><span class="text-muted">Здесь вы найдете широкий модельный ряд автоаксессуаров по самой низкой цене от производителя. Доступны розничные продажи навесного оборудования для всех представленных на сайте моделей и марок автомобилей.</span></h4>
      </div>
      <div class="col-md-5">
              <div class="jumbotron jumbotron-fluid"style="
    background: lightskyblue; border-radius: 10px;" >
       <h3 class=" text-muted text-center">Как купить автоаксессуары?</h3>
       <div class="row">
       <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <ol class="ol-1 text-muted">
            <li class="li-1">Вы выбираете</li>
            <li class="li-1">Мы консультируем</li>
            <li class="li-1">Вы заказываете</li>
            <li class="li-1">Мы доставляем</li>
            <li class="li-1">Вы оплачиваете</li>
        </ol>
      </div>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><a name="service"></a>Услуги для наших клиентов<hr><span class="text-muted"> 
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><h4>Разработка и изготовление эксклюзивных изделий из нержавеющей стали для Вашего автомобиля под заказ</h4></li>
          <li class="list-group-item">Создание индивидуального дизайна изделий</li>
          <li class="list-group-item">Моделирование конструкций на любой модельный ряд автомобилей</li>
          <li class="list-group-item">Услуги по установке нашей продукции на Ваш автомобиль</li>
          <li class="list-group-item">Техническая поддержка и консультация квалифицированных специалистов по установке наших изделий</li>
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
        <h2 class="featurette-heading" ><a name="forpartners"></a>Предложения для партнеров<hr><span class="text-muted"> <ul class="list-group list-group-flush">
          <li class="list-group-item">Компания предлагает самые низкие цены для дилеров</li>
          <li class="list-group-item">Оптовикам нет необходимости держать свой склад</li>
          <li class="list-group-item">Удобные условия работы для интернет-магазинов по дропшипингу -> прямые поставки потребителю (клиенту Вашего магазина) с наших складов, в т.ч. наложенным платежом</li>
          <li class="list-group-item">Отсутствие минимального заказа по сумме или количеству позиций, заказ от 1-й единицы, оперативная доставка заказа </li>
        </ul></span></h2>
      </div>
      <div class="col-md-5">
        <img class="img-thumbnail" src="{{asset('images/about-content/partn.jpg')}}"    alt="">
      </div>
    </div>


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection