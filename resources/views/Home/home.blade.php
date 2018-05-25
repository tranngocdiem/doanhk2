@extends('_layout')
@section('title') 
Trang chủ
@stop

@section('content')
    <div style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(image/background.jpg);
  background-size:cover;height: 100vh;">
    <div class="contain">
      <nav class="row2">
        <div class="">
          <h1 class="m-b-20"><strong> WELCOME TO DTQ FURNITURE</strong></h1>
          <p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#album-list">BỘ SƯU TẬP</a>
          </p>
        </div>
      </nav>
    </div>

    </div>
    <div class="album py-5 bg-light" id="album-list">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="image/phongkhach.jpg" alt="Card image cap" style="width: 100%;height: 300px;">
              <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">Phòng khách</p>
                    <button type="button" class="btn btn-info">Xem chi tiết</button>
                </div>
              </div>
            </div>
          </div>
         <div class="col-md-6">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="image/phongan.jpg" alt="Card image cap"  style="height: 300px;">
              <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">Phòng ăn</p>
                    <button type="button" class="btn btn-info"">Xem chi tiết</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="image/phongngu.jpg" alt="Card image cap" style="height: 300px;" >
              <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">Phòng ngủ</p>
                    <button type="button" class="btn btn-info">Xem chi tiết</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="image/phongkhach.jpg" alt="Card image cap" style="height: 300px;">
              <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">Phòng làm việc</p>
                    <button type="button" class="btn btn-info">Xem chi tiết</button>
                </div>
              </div>
            </div>
          </div>
         <div class="col-md-6">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="image/bep.jpg" alt="Card image cap" style="height: 300px;">
              <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">Bếp</p>
                    <button type="button" class="btn btn-info">Xem chi tiết</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="image/hangtrangtri.jpg" alt="Card image cap" style="height: 300px;">
              <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text">Hàng trang trí</p>
                    <button type="button" class="btn btn-info">Xem chi tiết</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop

