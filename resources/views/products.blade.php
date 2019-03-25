@extends('layouts.app')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light "style=" background-image:url({{asset('images/fon.jpg')}})">
  <div class="col-md-5 p-lg-5 mx-auto my-5" style=" background-color:#f8fafc">
    <h3 class="display-6 font-weight-normal">Продукция</h3>
    <p class="lead font-weight-normal">качественный и стильный обвес минимизирует риски, связанные с ездой в интенсивном городском потоке и за его пределами, обеспечивает автомобилю необходимую защиту, а вместе с ней и длительную эксплуатацию</p>
    <a class="btn btn-outline-secondary" href="https://drive.google.com/drive/folders/0B3SULnEGhz8lRmVhS0tvYkhKUTg" target="_blank">Каталог нашей продукции</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="album py-5 bg-light">
    <div class="container">
<div class="row">
    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/kengur/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Кенгурятники</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse1" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3">посмотреть ещё больше фото</button>
            <div class="row">
              <div class="collapse multi-collapse1" id="multiCollapseExample1">
                  <div class="card card-body">
                    <img src="{{asset('images/products/kengur/branch-one.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
                <div class="collapse multi-collapse1" id="multiCollapseExample2">
                  <div class="card card-body">
                   <img src="{{asset('images/products/kengur/branch-two.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>     
                <div class="collapse multi-collapse1" id="multiCollapseExample3">
                  <div class="card card-body">
                    <img src="{{asset('images/products/kengur/branch-three.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>  
            </div>
        </div>    
    </div>
    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/front-bumper/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Защита переднего бампера</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse2" aria-expanded="false" aria-controls="multiCollapseExample4">посмотреть ещё больше фото</button>
            <div class="row">
              <div class="collapse multi-collapse2" id="multiCollapseExample4">
                  <div class="card card-body">
                    <img src="{{asset('images/products/front-bumper/branch-one.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
                <div class="collapse multi-collapse2" id="multiCollapseExample18">
                  <div class="card card-body">
                    <img src="{{asset('images/products/front-bumper/branch-two.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/back-bumper/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Защита заднего бампера</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse3" aria-expanded="false" aria-controls="multiCollapseExample5 multiCollapseExample6">посмотреть ещё больше фото</button>
            <div class="row">
              <div class="collapse multi-collapse3" id="multiCollapseExample5">
                  <div class="card card-body">
                    <img src="{{asset('images/products/back-bumper/branch-one.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
                <div class="collapse multi-collapse3" id="multiCollapseExample6">
                  <div class="card card-body">
                    <img src="{{asset('images/products/back-bumper/branch-two.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
            </div>
        </div>    
    </div>
</div> 
<div class="row">
    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/roll-bar/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Ролл-бар</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse4" aria-expanded="false" aria-controls="multiCollapseExample7 multiCollapseExample8 ">посмотреть ещё больше фото</button>
            <div class="row">
              <div class="collapse multi-collapse4" id="multiCollapseExample7">
                  <div class="card card-body">
                    <img src="{{asset('images/products/roll-bar/branch-one.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
                <div class="collapse multi-collapse4" id="multiCollapseExample8">
                  <div class="card card-body">
                   <img src="{{asset('images/products/roll-bar/branch-two.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>     
            </div>
        </div>    
    </div>
    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/side/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Пороги</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse5" aria-expanded="false" aria-controls="multiCollapseExample9 multiCollapseExample10">посмотреть ещё больше фото</button>
            <div class="row">
              <div class="collapse multi-collapse5" id="multiCollapseExample9">
                  <div class="card card-body">
                    <img src="{{asset('images/products/side/branch-one.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="collapse multi-collapse5" id="multiCollapseExample10">
                  <div class="card card-body">
                    <img src="{{asset('images/products/side/branch-two.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/luster/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Держатели фар (люстры)</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse6" aria-expanded="false" aria-controls="multiCollapseExample11">посмотреть ещё больше фото</button>
            <div class="row">
              <div class="collapse multi-collapse6" id="multiCollapseExample11">
                  <div class="card card-body">
                    <img src="{{asset('images/products/luster/branch-one.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
            </div>
        </div>    
    </div>
</div> 
<div class="row">
    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/trunk/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Багажники</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse7" aria-expanded="false" aria-controls="multiCollapseExample12 multiCollapseExample13 ">посмотреть ещё больше фото</button>
            <div class="row">
              <div class="collapse multi-collapse7" id="multiCollapseExample12">
                  <div class="card card-body">
                    <img src="{{asset('images/products/trunk/branch-one.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
                <div class="collapse multi-collapse7" id="multiCollapseExample13">
                  <div class="card card-body">
                   <img src="{{asset('images/products/trunk/branch-two.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>     
            </div>
        </div>    
    </div>

    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/truck/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Фуры, грузовики</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse9" aria-expanded="false" aria-controls="multiCollapseExample16 multiCollapseExample17">посмотреть ещё больше фото</button>
            <div class="row">
                <div class="collapse multi-collapse9" id="multiCollapseExample17">
                  <div class="card card-body">
                    <img src="{{asset('images/products/truck/branch-two.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
            </div>
        </div>    
    </div>
        <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/cap/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Насадки для глушителя</p>
          </div>
        </div>
                      <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse10" aria-expanded="false" aria-controls="multiCollapseExample19">see more photos</button>
            <div class="row">
                <div class="collapse multi-collapse10" id="multiCollapseExample19">
                  <div class="card card-body">
                    <img src="{{asset('images/products/cap/branch-one.jpg')}}" class="card-img-top" alt="...">
                  </div>
                </div>
        </div>    
    </div>
</div> 
</div>



@endsection




