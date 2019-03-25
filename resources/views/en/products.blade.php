@extends('layouts.appEn')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light "style=" background-image:url({{asset('images/fon.jpg')}})">
  <div class="col-md-5 p-lg-5 mx-auto my-5" style=" background-color:#f8fafc">
    <h3 class="display-6 font-weight-normal">Products </h3>
  <p class = "lead font-weight-normal"> a high-quality and stylish body kit minimizes the risks associated with driving in intensive city traffic and beyond, provides the vehicle with the necessary protection, and with it long-term operation </p>
    <a class="btn btn-outline-secondary" href="https://drive.google.com/drive/folders/0B3SULnEGhz8lRmVhS0tvYkhKUTg" target="_blank">Catalog of our products</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>Catalog of our products

<div class="album py-5 bg-light">
    <div class="container">
<div class="row">
    <div class="col-md-4">
        <div class="text-center">
        
        <div class="card" style="width: 18rem;">
          <img src="{{asset('images/products/kengur/main.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Front bumper protection</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse1" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3">see more photos</button>
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
            <p class="card-text">Front bumper protection</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse2" aria-expanded="false" aria-controls="multiCollapseExample4 multiCollapseExample18">see more photos</button>
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
            <p class="card-text">Rear bumper protection</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse3" aria-expanded="false" aria-controls="multiCollapseExample5 multiCollapseExample6">see more photos</button>
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
            <p class="card-text">Roll bar</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse4" aria-expanded="false" aria-controls="multiCollapseExample7 multiCollapseExample8 ">see more photos</button>
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
            <p class="card-text">Rapids</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse5" aria-expanded="false" aria-controls="multiCollapseExample9 multiCollapseExample10">see more photos</button>
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
            <p class="card-text">Holders of lights (chandeliers)</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse6" aria-expanded="false" aria-controls="multiCollapseExample11">see more photos</button>
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
            <p class="card-text">Luggage racks</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse7" aria-expanded="false" aria-controls="multiCollapseExample12 multiCollapseExample13 ">see more photos</button>
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
            <p class="card-text">Trucks</p>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target=".multi-collapse9" aria-expanded="false" aria-controls="multiCollapseExample16 multiCollapseExample17">see more photos</button>
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
            <p class="card-text">Tips for muffler</p>
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
</div>



@endsection




