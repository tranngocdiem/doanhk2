@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/sanpham1.css">
@stop
@section('sub_content')
<div class="container">
  <div class="row">
    <div>
      
      <!-- hiển thị top sản phẩm mới nhất -->
      <?php
        if (isset($Bestseller))
        {
          ?>
          <div>
            <h5 style="font-family: Arial;color: red;font-size: 30px; margin-bottom: 20px;  margin-top: 20px;">Sản phẩm bán chạy nhất</h5>
            <br>
          </div>
          
          <div id = "hienthisanpham" class="row">
            <?php
          foreach($Bestseller as $row)
          {
            ?>
            <?php
              $banggia = DB::table('banggia')
               ->join('chuongtrinhkhuyenmai','banggia.makm','=','chuongtrinhkhuyenmai.makm')
               ->where('banggia.maloai','=',$row->maloai)
               ->where('banggia.isDeleted',0)
               ->get();
               $thongtin = DB::table('loaisanpham')
               ->join('hinhanh','hinhanh.maloai','loaisanpham.maloai')
               ->where('loaisanpham.maloai',$row->maloai)
               ->where('hinhanh.isDeleted',0)
               ->get();
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
            <div id="anhsp" class="card h-100">
            <a href="{!!url('sanpham/chitietsanpham',[$row->maloai])!!}">
              <img class="card-img-top" src="{{ url('/') }}/image/sanpham/<?php echo $thongtin[0]->url?>" alt="">
            </a>
            
            <div id='addcart'>
              
              <a href="javascript:void(0);" class="themvaogiohang" style="width:90%" data-gia="<?php echo $banggia[0]->gia - ($banggia[0]->gia * $banggia[0]->discount / 100); ?>" data-maloai="<?php echo $row->maloai ?>" id="themvaogio"><i style="padding: 0px 20px;" class="fas fa-cart-arrow-down"></i>Thêm vào giỏ hàng</a>
              
            </div>
            
            <div class="card-body">
            <h4 class="card-title">
            <?php echo $thongtin[0]->tenloai ?>
            </h4>
            <div>
              <span style="font-weight: bold; color: red; font-size: 20px"><?php echo $banggia[0]->gia?> VND</span>
              <span style="color: #FF3B26; font-size: 15px">-<?php echo $banggia[0]->discount; ?>%</span>
            </div>
            <p class="card-text"><?php echo $thongtin[0]->mota ?>.</p>
            </div>

            </div>
            </div>
            <?php
          }
          ?>
          </div>
        <?php
        }
        else echo'<h4>Không tìm thấy sản phẩm nào</h4>';
      ?>

      <!-- hiển thị sản phẩm -->
          <!-- Phân trang -->
      <!-- /.row -->

    </div>
  </div>
 
</div>
    @stop