@extends('Sanpham._layoutsanpham')
@section('link')
@parent
<link rel="stylesheet" href="{{ url('/') }}./css/Sanpham/sanpham1.css">
@stop
@section('sub_content')
<div class="container">

  <div class="row">
    <div>
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
          </div>
          
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div id = "hienthisanpham" class="row">
        <?php
        $sqlQuery="SELECT * FROM loaisanpham JOIN hinhanh on loaisanpham.maloai = hinhanh.maloai
        where hinhanh.isDeleted=0 ";
        $results = DB::SELECT($sqlQuery);
        if ($results) {

        //output results from database
          foreach($results as $row)
          {
            echo'<div class="col-lg-4 col-md-6 mb-4">';
            echo'<div id="anhsp" class="card h-100">';
            echo'<a href="#"><img class="card-img-top" src="image/sofagoc/'.$row->url.'"alt=""></a>';
            echo'<div id="addcart"><a id="themvaogio"><i style="padding: 0px 10px;" class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng</a></div>';
            echo'<div class="card-body">';
            echo'<h4 class="card-title">';
            echo'<a href="#">'.$row->tenloai.'</a>';
            echo'</h4>';
            echo'<h5>$24.99</h5>';
            echo'<p class="card-text">'.$row->mota.'</p>';
            echo'</div>';

            echo'</div>';
            echo'</div>';
          }
        }
        ?>

      </div>
      <!-- /.row -->

    </div></div></div>
    @stop