@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="css/Sanpham/chitietspzoom.css">
<link rel="stylesheet" href="css/Sanpham/cloud-zoom.css">
<link rel="stylesheet" href="css/Sanpham/chitietsp.css">
@stop
@section('sub_content')

<div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <ol class="breadcrumb" style="margin-bottom: 5px;">
        <li><a href="#">Home ></a></li>
        <li><a href="#">Library ></a></li>
        <li class="active">Data</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-6" id="hinhanh">
      <div class="gallery-sample">
        <div class="cloud-zoom-wrap">
          <a href="image/sanpham/test/3-Z.jpg" class="cloud-zoom" id="cloudZoom">
            <img src="image/sanpham/test/3-Z.jpg" title="The Title" class="img-responsive">
          </a>
          <ul class="recent_list">
            <li class="photo_container">
              <a href="image/sanpham/test/3-Z.jpg" rel="gallerySwitchOnMouseOver: true, popupWin:'image/sanpham/test/3-Z.jpg', useZoom: 'cloudZoom', smallImage: 'image/sanpham/test/3-Z.jpg'" class="cloud-zoom-gallery">
                <img itemprop="image" src="image/sanpham/test/3-M.jpg" class="img-responsive">
              </a>
            </li>
            <li class="photo_container">
              <a href="image/sanpham/test/4-Z.jpg" rel="gallerySwitchOnMouseOver: true, popupWin:'image/sanpham/test/4-Z.jpg', useZoom: 'cloudZoom', smallImage: 'image/sanpham/test/4-Z.jpg'" class="cloud-zoom-gallery">
                <img itemprop="image" src="image/sanpham/test/4-M.jpg" class="img-responsive">
              </a>
            </li>
            <li class="photo_container">
              <a href="image/sanpham/test/5-Z.jpg" rel="gallerySwitchOnMouseOver: true, popupWin:'image/sanpham/test/5-Z.jpg', useZoom: 'cloudZoom', smallImage: 'image/sanpham/test/5-Z.jpg'" class="cloud-zoom-gallery">
                <img itemprop="image" src="image/sanpham/test/5-M.jpg" class="img-responsive">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div>
        <ul class="nav nav-tabs" id="chitiet">
          <li class="nav-item">
            <a href="#" class="nav-link">Active</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Active</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Active</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">Active</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-6" id="thongtinsp">
      <div class="row">
        <h2>Tên sản phẩm</h2>
      </div>
      <div class="row">
        <h3 style="color: coral;">Giá: </h3>
      </div>
      <div class="row">
        
          <div class="QuantityPicker display-inline-block l-margin-right"><select id="quantity" name="quantity" class="QuantityPicker-select font-semibold"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select><span aria-hidden="false" tabindex="" class="fas fa-chevron-down" alt="Icon for down-arrow"></span></div>
        <button id="btn-themvaogio">Thêm vào giỏ hàng</button>
      </div>

    </div>
  </div>
</div>



<script src="js/jquery.js"></script> 
<script type="text/javascript" src="js/sanpham/cloud-zoom.js"></script> 
@stop


