@extends('Sanpham._layoutsanpham')
@section('title') 
Chi tiết sản phẩm
@stop
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
        <li><a href="{!! url('/sanpham') !!}">Sản phẩm ></a></li>
        <li><a href="{{ URL::previous() }}"><?php echo $sanpham[0]->tensp?></a></li>
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
            <img id="hinhanhsp" src="{{ url('/') }}/image/sanpham/<?php echo $results[0]->url?>" title="The Title" class="img-responsive">
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
      </div>
      <br>
      <div class="row">
        <span style="display: inline-block; min-width: 80px; font-weight: bold; font-size: 20px">Mô tả: </span>
        <span style="font-size: 20px" ><?php echo $results[0]->mota?></span> </p>
      </div>
      <br>
      <div class="row">
            <?php
              
              $price = DB::table('banggia')
              ->join('chuongtrinhkhuyenmai','chuongtrinhkhuyenmai.makm','banggia.makm')
              ->where('banggia.maloai','=', $results[0]->maloai)
              ->get();
            ?>
            <span style="display: inline-block; min-width: 80px; font-weight: bold; font-size: 20px">Giá:</span>
            <span style="font-weight: bold; font-size: 20px"><?php echo $price[0]->gia - ($price[0]->gia * $price[1]->discount / 100); ?> VNĐ</span>
            <span style="font-size: 15px;text-decoration: line-through; color:  #a2a2a2;"><?php echo $price[0]->gia ?> VNĐ</span>
            <span style="font-weight: bold; color: #FF3B26;">-<?php echo $price[1]->discount; ?>%</span>
      </div>
      <div class="row" style="margin-top: 80px">
        <button id="btnthemvaogio" class="btn btn-outline-danger btn-lg" style="margin-left: 20px" data-maloai = "<?php echo $results[0]->maloai; ?>" data-gia = "<?php echo $price[0]->gia - ($price[0]->gia * $price[1]->discount / 100); ?>"><i class="fas fa-cart-arrow-down">    Thêm vào giỏ hàng</i></button>
      </div>

    </div>
  </div>
</div>
<br>
<!-- các sản phẩm liên quan -->
<div style="margin-left: 50px; font-size: 30px">BẠN CÓ THỂ QUAN TÂM</div>
<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <?php  for($i = 0; $i<4; $i++)
        { 
          $price_product = DB::table('banggia')
              ->join('chuongtrinhkhuyenmai','chuongtrinhkhuyenmai.makm','banggia.makm')
              ->where('banggia.maloai','=', $relatedproduct[$i]->maloai)
              ->where('banggia.isDeleted',0)
              ->get();

        ?>
        <div class="col-3">
          <div style=" padding:1px; border:1px solid #021a40;">
          <a href="{!!url('sanpham/chitietsanpham',[$relatedproduct[$i]->maloai])!!}">
          <img style="width: 500px; height: 200px;" class="d-block w-100" src="{{ url('/') }}/image/sanpham/<?php echo $relatedproduct[$i]->url?>" alt="anh4">
          </a>
          <div class="title-invole"><?php echo substr($relatedproduct[$i]->tenloai,0,22).' ...' ?>
          </div>
          <span class="price-invole"><?php echo $price_product[0]->gia - ($price_product[0]->gia * $price_product[0]->discount / 100); ?> VNĐ</span>
          <span class="priceOld-invole"><?php echo $price_product[0]->gia ?> VNĐ</span>
          <span class="discount-invole">-<?php echo $price_product[0]->discount; ?>%</span>
        </div>
        
      </div>
        <?php }?>
      </div>

    </div>
    <div class="carousel-item">
      <div class="row">
        <?php  for($i = 4; $i<8; $i++)
        { 
          $price_product = DB::table('banggia')
              ->join('chuongtrinhkhuyenmai','chuongtrinhkhuyenmai.makm','banggia.makm')
              ->where('banggia.maloai','=', $relatedproduct[$i]->maloai)
              ->get();
        ?>
        <div class="col-3">
          <div style=" padding:1px; border:1px solid #021a40;">
          <a href="{!!url('sanpham/chitietsanpham',[$relatedproduct[$i]->maloai])!!}">
          <img style="width: 500px; height: 200px;" class="d-block w-100" src="{{ url('/') }}/image/sanpham/<?php echo $relatedproduct[$i]->url?>" alt="anh4">
          </a>
          <div class="title-invole"><?php echo substr($relatedproduct[$i]->tenloai,0,22).' ...' ?>
          </div>
          <span class="price-invole"><?php echo $price_product[0]->gia - ($price_product[0]->gia * $price_product[1]->discount / 100); ?> VNĐ</span>
          <span class="priceOld-invole"><?php echo $price_product[0]->gia ?> VNĐ</span>
          <span class="discount-invole">-<?php echo $price_product[1]->discount; ?>%</span>
        </div>
        </div>
        <?php }?>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br>
<br>
    




<script src="{{ url('/') }}./js/jquery.js"></script> 
<script type="text/javascript" src="{{ url('/') }}./js/sanpham/cloud-zoom.js"></script> 
@stop


