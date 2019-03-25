@extends('layouts.appUa')

@section('content')


<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
       <div class="text-center">
        <img src="{{asset('images/icons/icon-one.png')}}" alt="">
        <h2>Про нас</h2>
        <p>Компанія ST-Line пропонує навісне обладнання власного виробництва для позашляховиків і вантажних автомобілів: кенгурятники, пороги, ролл-бари, куточки, захист бампера, багажники та інші вироби</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#aboutus" role="button">Дивитися докладніше &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <div class="text-center">
       <img src="{{asset('images/icons/icon-two.png')}}" alt="">
        <h2>Послуги</h2>
        <p>Наша компанія шукає автомобілі для розробки на них виробів з нержавіючої сталі</p>
        <p>Зв'яжіться з нами</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#service" role="button">Дивитися докладніше &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <div class="text-center">
        <img src="{{asset('images/icons/icon-three.png')}}" alt="">
        <h2>Партнерам</h2>
        <p>Станьте партнерами компанії та заробляйте разом з нами</p>
        <p><a class="btn btn-sm btn-outline-secondary" href="#forpartners" role="button">Дивитися докладніше &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><a name="aboutus"></a>Про нас ST-line<hr><span class="text-muted">Тут ви знайдете широкий модельний ряд автоаксесуарів за найнижчою ціною від виробника. Доступні роздрібні продажі навісного обладнання для всіх представлених на сайті моделей і марок автомобілів.</span></h2>
      </div>
      <div class="col-md-5">
              <div class="jumbotron jumbotron-fluid"style="
    background: lightskyblue; border-radius: 10px;" >
       <h3 class=" text-muted text-center">Як купити автоаксесуари?</h3>
       <div class="row">
       <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <ol class="ol-1 text-muted">
            <li class="li-1">Ви обираєте</li>
            <li class="li-1">Ми консультуємо</li>
            <li class="li-1">Ви  замовляєте</li>
            <li class="li-1">Ми доставляємо</li>
            <li class="li-1">Ви оплачуєте</li>
        </ol>
      </div>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><a name="service"></a>Послуги для наших клієнтів<hr><span class="text-muted"> 
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Розробка і виготовлення ексклюзивних виробів з нержавіючої сталі для Вашого автомобіля під замовлення</li>
          <li class="list-group-item">Створення індивідуального дизайну виробів</li>
          <li class="list-group-item">Моделювання конструкцій на будь-який модельний ряд автомобілів</li>
          <li class="list-group-item">Послуги з установки нашої продукції на Ваш автомобіль</li>
          <li class="list-group-item">Технічна підтримка та консультація кваліфікованих фахівців з установки наших виробів</li>
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
        <h2 class="featurette-heading" ><a name="forpartners"></a>Пропозиції для партнерів<hr><span class="text-muted"> <ul class="list-group list-group-flush">
          <li class="list-group-item">Компанія пропонує найнижчі ціни для дилерів</li>
          <li class="list-group-item">Оптовикам немає необхідності тримати свій склад</li>
          <li class="list-group-item">Зручні умови роботи для інтернет-магазинів по дропшіпінгу -> прямі поставки споживачеві (клієнту Вашого магазину) з наших складів, в т.ч. накладеним платежем</li>
          <li class="list-group-item">Відсутність мінімального замовлення по сумі або кількості позицій, замовлення від 1-ї одиниці, оперативна доставка замовлення</li>
        </ul></span></h2>
      </div>
      <div class="col-md-5">
        <img class="img-thumbnail" src="{{asset('images/about-content/partn.jpg')}}"    alt="">
      </div>
    </div>


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection