@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/chitietspzoom.css">
<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/cloud-zoom.css">
<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/chitietsp.css">
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
          <?php
          if(isset($results))
          {
            ?>
            <a  href="{{ url('/') }}/image/sanpham/<?php echo $results[0]->url?>" class="cloud-zoom" id="cloudZoom">
            <img src="{{ url('/') }}/image/sanpham/<?php echo $results[0]->url?>" title="The Title" class="img-responsive">
            <!-- 450-324 -->
          </a>
          <?php
            if(isset($results_all))
            {
              ?>
              <ul class="recent_list">
                <?php
              foreach($results_all as $row)
              {
              ?>
              
                  <li class="photo_container">
                  <a href="{{ url('/') }}/image/sanpham/<?php echo $row->url?>" rel="gallerySwitchOnMouseOver: true, popupWin:'{{ url('/') }}/image/sanpham/<?php echo $row->url?>', useZoom: 'cloudZoom', smallImage: '{{ url('/') }}/image/sanpham/<?php echo $row->url?>'" class="cloud-zoom-gallery">
                 <img style="width: 200px;height: 150px;" itemprop="image" src="{{ url('/') }}/image/sanpham/<?php echo $row->url?>" class="img-responsive">
                  </a>
                  </li>
          
           <?php
            }
            ?>
            </ul>
            <?php
          }
        }
          ?>
          
        </div>
      </div>
      
    </div>
    <div class="col-6" id="thongtinsp">
      <div class="row">
        <h2><?php echo $results[0]->tenloai?></h2>
        <p style="font-size: 20px"><?php echo $results[0]->mota?></p>
      </div>
      <div class="row">
        <p style="color: coral;font-size: 20px">Giá: </p>
      </div>
      <div class="row">
        <p style="color: coral;font-size: 20px">Tiết kiệm: </p>
      </div>
      <div class="row">
        <button class="btn btn-outline-danger btn-lg" style="margin-left: 50px"><i class="fas fa-cart-arrow-down">   Thêm vào giỏ hàng</i></button>
      </div>

    </div>
  </div>
</div>



<script src="{{ url('/') }}./js/jquery.js"></script> 
<script type="text/javascript" src="{{ url('/') }}./js/sanpham/cloud-zoom.js"></script> 
@stop


