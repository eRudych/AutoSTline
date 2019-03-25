<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ST-Line') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <meta name="Keywords" content="Кенгурятник, Дуга, Кенгурин, Обвес, Передняя защита, Губа, Обводка, Ус, Усы, ARP(Турция), St-line, автоакссесуары,front bumper protection, rear bumper protection, sills, roof rails, chandeliers, stainless steel products, стлайн, ст-лайн, stline"> 
    <meta name="author" content="eliz">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
      <nav class="site-header py-1">
   <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 d-none d-md-inline-block"href="#"><i class="fas fa-phone"></i>+38(068)269-25-03 <br>+38(073)227-65-93</a>
     <a class="py-2 d-none d-md-inline-block" href="#"><i class="fas fa-envelope"></i>contacts@st-line.vn.ua<br>st-line@i.ua</a>
    <a class="py-2 d-none d-md-inline-block" href="#"><i class="fab fa-skype"></i>st-line@mail.ru</a>
    <a class="py-2 d-none d-md-inline-block" href="https://www.facebook.com/vadim.troyan.77" target="_blank"><i class="fab fa-facebook"></i></a>
    <a class="py-2 d-none d-md-inline-block" href="https://plus.google.com/112045318869829258987" target="_blank"><i class="fab fa-google-plus-g"></i></a>
    <a class="py-2 d-none d-md-inline-block" href="https://www.youtube.com/channel/UC1kX8SSPAU8RDW4-MGur3FA" target="_blank"><i class="fab fa-youtube"></i></a>
     <a class="py-2 d-none d-md-inline-block" href="https://www.instagram.com/uk_vinnitsa/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a class="py-2 d-none d-md-inline-block" href="https://t.me/stlinevn" target="_blank"><i class="fas fa-paper-plane"></i></a>
    <a href="#" data-toggle="modal" data-target="#exampleModal">
    <wrapper>
       <div class="dws">
          <div class="pulse">
             <div class="phone"><i class="fas fa-comments"></i></div>
             <div class="text">Write to us</div>
          </div>
       </div>
    </wrapper>
    </a>
       <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2" href="../../ru/">ru</a>
            <a class="p-2" href="../../ua/">ua</a>
            <a class="p-2" href="../../en/">en</a>
        </nav>
  </div>
</nav>

            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="post" action="{{ url('/') }}">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Name:</label>
                    <input type="text" name="name" class="form-control" id="recipient-name"maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="num phone" class="col-form-label">Phone number:</label>
                    <input type="tel" name="phone"  placeholder=" format: 380934545363" class="form-control"  maxlength="12" pattern="[0-9]{12}" required >
                    </div>
                    <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea  name="message" class="form-control" id="message-text"maxlength="300" required></textarea>
                  </div>
                               <div class="form-group">
                                <div class="modal-footer">
                                {{csrf_field()}}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" class="form-control" >Send message</button>
              </div>
                     </div>
                </form>
              </div>

            </div>
          </div>
        </div>
 
 
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a  class="navbar-brand" href="{{ url('/') }}/ua">
                    <img style="max-height:60px" src="{{asset('images/ST-line.jpg')}}" alt="">
                   </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                   </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a  href="../../ua/about" class="nav-link active">Про нас</a>
                            </li>
                            <li class="nav-item">
                                <a  href="../../ua/products" class="nav-link active">Продукція</a>
                            </li>
                            <li class="nav-item">
                                <a href="../../ua/news" class="nav-link active">Новини</a>
                            </li>
                             @if(Auth::check())
                                <a class="dropdown-item" href="../../ua/post/add">.</a>
                               @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                @if (Route::has('register'))
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <footer class="container py-5" style="
    min-width: 100%;
    margin: 0;
    padding-left: 10%;
    /* padding-right: 10%; */">
  <div class="row">
    <div class="col-4 col-md">
    <div class=" text-center">
    <div class="embed-responsive embed-responsive-16by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d347.4737821062399!2d28.44420128704124!3d49.19624682950086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5bef0335983f%3A0x82baa2a58e5eeb46!2sST-Line!5e0!3m2!1sru!2sua!4v1550478753666" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
    </div>
<!--    <div class="col-8 col-md"></div>-->
<!--    </div>-->
<!--  <div class="row">-->

    <div class="col-2 col-md">
      <h5>Контакти</h5>
      <ul class="list-unstyled text-small">
       <li><a class="text-muted" href="#">+38(068)269-25-03 <br>+38(073)227-65-93</a></li>
        <li><a class="text-muted" href="https://www.facebook.com/vadim.troyan.77" target="_blank">Facebook</a></li>
        <li><a class="text-muted" href="#">Skype st-line@mail.ru</a></li>
         <li><a class="text-muted" href="#">Email contacts@st-line.vn.ua</a></li>
        <li><a class="text-muted" href="https://www.t.me/stlinevn" target="_blank">Telegram</a></li>
        <li><a class="text-muted" href="https://www.youtube.com/channel/UC1kX8SSPAU8RDW4-MGur3FA" target="_blank">Youtube</a></li>
        <li><a class="text-muted" href="https://www.plus.google.com/112045318869829258987" target="_blank">Google</a></li><li><a class="text-muted" href="https://www.instagram.com/uk_vinnitsa/" target="_blank">Instagram</a></li>
         <small class="d-block mb-3 text-muted">&copy; 2019</small>
      </ul>
    </div>
        <div class="col-4 col-md"></div> 
  </div>
</footer>
    
</body>
</html>
